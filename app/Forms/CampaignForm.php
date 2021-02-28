<?php

namespace App\Forms;
use Kris\LaravelFormBuilder\Form;

class CampaignForm extends Form
{
    public function buildForm()
    {
       $this
            ->add('name', 'text', [
                'rules' => 'required|min:2'
            ])
            ->add('campaign_name', 'text', [
                'rules' => 'required|min:2'
            ])
            ->add('content', 'textarea', [
                'rules' => 'required|min:2'
            ])
            ->add('email', 'email')
            ->add('goal', 'number', [
                'rules' => 'required|min:1'
            ])

            ->add( 'Créer une campagne ','submit');
    }

}
