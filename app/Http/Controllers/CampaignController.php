<?php

namespace App\Http\Controllers;

use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Forms\CampaignForm;
use Illuminate\Support\Facades\DB;



class CampaignController extends Controller
{
    /*
    * Add New Campaign 
    *  return view form campaign 
    *
    */
    public function new_campaign(FormBuilder $formBuilder){
 
        //Form
        $form = $formBuilder->create(\App\Forms\CampaignForm::class, [
            'method' => 'POST',
            'url' => route('campaign.store')
        ]);

        
        return view('Campaign.new_campaign', compact('form'));
    }

    /*
    *
    *  Store after form new campaign
    *
    */
    public function store(Request $request, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(CampaignForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }else{
            $campaign = new Campaign;

            $this->setCampaignModels($campaign, $request);
        
            //send to database

            DB::table('campaign')->insert([
                'campaign_name'=> $campaign->getCampaignName(),	
                'goal' => $campaign->getGoal(),	
                'content' => $campaign->getContent(),
                'name' => $campaign->getName(),
                'email'	=> $campaign->getEmail()

            ]);
            echo 'succes';
        }

    }


    /*
    *
    *Camapaign setters
    *
    */
    public function setCampaignModels(Campaign $campaign,$array){
        $campaign->setName($array->input('name'));
        $campaign->setCampaignName($array->input('campaign_name'));
        $campaign->setContent($array->input('content'));
        $campaign->setEmail($array->input('email'));
        $campaign->setGoal($array->input('goal'));
    }
}
