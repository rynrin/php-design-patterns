<?php
namespace FactoryMethod;

class CommunityExecutive implements Interviewer
{

    public function askQuestions()
    {
        echo "Asking about community building\n";
    }
}