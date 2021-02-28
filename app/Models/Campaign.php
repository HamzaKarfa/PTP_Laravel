<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected 
        $id,
        $campaign_name,
        $name,
        $email,
        $goal,
        $content,
        $created_at,
        $updated_at;


   
    //Getters
    public function getId(){
        return $this->id;
    }
    public function getCampaignName(){
        return $this->campaign_name;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getContent(){
        return $this->content;
    }
    public function getGoal(){
        return $this->goal;
    }
    //Setters  
    public function setCampaignName($campaign_name){

        $this->campaign_name =  $campaign_name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setGoal($goal){
        $this->goal = $goal;
    }



    public function arrayContent() {
        return get_object_vars($this);
    }
}
