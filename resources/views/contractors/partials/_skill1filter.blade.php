<?php
use Faker\Provider\TechnicalSkills as TechnicalSkills;
?>

    <!-- <div class="col-md-1">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="skillDropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Skill
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="skill1">
                @foreach(TechnicalSkills::$skills as $skill)
                <li>
                    <a href="#">
                        {{ $skill }}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div> -->


    <?php
        $sorted_skills = TechnicalSkills::$skills;
        sort($sorted_skills);
    ?>
    <select type="search" class="select-table-filter" data-table="order-table" id="skill-name">
        <option value="">Skill</option>
        @foreach($sorted_skills as $skill)
        <option value="{{ $skill }}">{{ $skill }}</option>
        @endforeach  
    </select>

    <select type="search" class="select-table-filter" data-table="order-table" id="skill-compare">
        <option value="">is</option>
        <option value=">">></option>
        <option value="=">=</option>
        <option value=">=">>=</option>
    </select>

    <select type="search" class="select-table-filter" data-table="order-table" id="skill-score">
        <option value="">Score</option>
        @for ($i = 0; $i < 10; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor  
    </select>



    <!-- <div class="col-md-1">
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                is
                <span class="caret">
                </span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="compare1">
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
            <ul class="dropdown-menu" aria-labelledby="score1">
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
    </div> -->