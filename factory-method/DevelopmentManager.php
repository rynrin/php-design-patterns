<?php
namespace FactoryMethod;

class DevelopmentManager extends HiringManager
{

    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}