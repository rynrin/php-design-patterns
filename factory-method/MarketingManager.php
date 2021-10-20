<?php
namespace FactoryMethod;

class MarketingManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}