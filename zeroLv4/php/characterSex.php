<?php

function getSex ($characterSex)
{
    
    if($characterSex == 1)
    {
        $sex = rand(1, 11);

        if($sex == 1)
        {
            return 'Other';
        }
        else if($sex >= 2 && $sex <=6)
        {
             return 'Male';
        }
        else{
            return 'Female';
        }
        
    }
    else if($characterSex == 2)
    {
        return 'Female';
    }
    else if($characterSex == 3)
    {
        return 'Male';
    }
    else if($characterSex == 4)
    {
        return 'Other';
    }
    else
    {
        return '';
    }
    
}

?>