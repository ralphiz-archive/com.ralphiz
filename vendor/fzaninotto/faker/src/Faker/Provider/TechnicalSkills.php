<?php

namespace Faker\Provider;

class TechnicalSkills extends \Faker\Provider\Base
{
    protected static $skills = array(
        // Top 18 programming languages from [http://pypl.github.io/PYPL.html]
        'Java', 'Python', 'PHP', 'C#', 'JavaScript', 'C++', 'C', 'Objective-C', 'R', 'Swift', 'Matlab', 'Ruby', 'Visual Basic', 'VBA', 'Perl', 'Scala', 'lua', 'Delphi',

        // Top 10 web frameworks from [http://hotframeworks.com/]
        'ASP.net', 'AngularJS', 'Ruby on Rails', 'ASP.net MVC', 'Django', 'Laravel', 'Meteor', 'Spring', 'Express', 'CodeIgniter',

        // Other random skills
        'Android', 'iOs', 'AI', 'QA',

        // FE/BE/FS
        'Front-end', 'Back-end', 'Full Stack'
    );

    /**
     * @example 'PHP'
     */
    public function randomSkill()
    {
        return static::randomElement(static::$skills);
    }
}
