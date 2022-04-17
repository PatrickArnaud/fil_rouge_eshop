<?php

namespace App\Controllers;

use App\Models\TagsModel;


class Tags extends BaseController
{
    public function all()
    {
        $model = new \App\Models\TagsModel();
        $tags = $model->findAll();
        $this->twig->display('tags/all_tags.html', compact("tags"));
    }


    public function create()
    {
        $this->renderTemplateTag("add_tag");
    }

    public function add_tag()
    {
        $data = [];
        helper(['form']);
        $rules = [
            'tag_name' => 'required|alpha|min_length[2]',
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
        } else {
            //add users
            $tagUser = new TagsModel();
            $newTag = [
                'id_tag' => $this->request->getPost('tag_id'),
                'name_tag' => $this->request->getVar('tag_name'),
            ];
            $tagUser->save($newTag);
            $tagRegister = session();
            $tagRegister->setFlashdata('success', 'Tag bien enregistré !');
        }
                $this->renderTemplateTag("add_tag");

    }


   


    public function search()
    {
        $this->renderTemplateTag("search_tag");
    }


    public function edit()
    {
        $this->renderTemplateTag("edit_tag");
    }


    public function one($id_tag)
    {
        $model = new  \App\Models\TagsModel();
        $tag = $model->find($id_tag);
        $this->twig->display('tags/one_tag.html', compact("tag"));
    }
}
