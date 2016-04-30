<?php
use Faker\Provider\TechnicalSkills as TechnicalSkills;
?>

<div class="row">
    <div class="col-md-1">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="skillDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Skill
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownSkill1">
                @foreach(TechnicalSkills::$skills as $skill)
                <li>
                    <a href="#">
                        {{ $skill }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-1">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                is
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownCompare1">
                <li>
                    <a href="#">
                        >=
                    </a>
                </li>
                <li>
                    <a href="">
                        >
                    </a>
                </li>
                <li>
                    <a href="">
                        =
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-1">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="scoreDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Score
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownScore1">
                <li>
                    10
                </li>
                <li>
                    9
                </li>
                <li>
                    8
                </li>
                <li>
                    7
                </li>
                <li>
                    6
                </li>
                <li>
                    5
                </li>
                <li>
                    4
                </li>
                <li>
                    3
                </li>
                <li>
                    2
                </li>
                <li>
                    1
                </li>
                <li>
                    0
                </li>
            </ul>
        </div>
    </div>
</div>