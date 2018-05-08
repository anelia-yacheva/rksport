@extends('layouts.app')

@section('content')
    <h1 class="text-center">Анкета</h1>
    <div class="jumbotron">
        <p>Уважаеми голф играчи,</p>
        <p>Аз съм Рада Кирчева, студент по специалност "Спорт за високи постижения – голф" в Национална спортна академия "Васил Левски". Пред вас е анкетна карта във връзка с дипломния ми идеен проект по специалността.</p>
        <p>Настоящата анкета се провежда с цел събиране на обективна информация от гледна точка на голф играчи със статут на аматьор и обогатяване знанията за особеностите на проблемите и процесите, протичащи при подготовка в спорта голф към настоящият момент.</p>
        <p>От тази гледна точка, Вашето мнение като голф играчи е особено ценно. Анкетата е анонимна, съдържа 31 въпроса. Приблизителното време за попълване е 10-15 мин.</p>
        <p>Моля, прочете внимателно въпросите и отбележете верния според вас отговор или добавете ваш.</p>
    
        <p class="danger">В <a href="<?php echo url('/');?>" title="RKSport">RKSport</a>, аз, Рада Кирчева, собственик на този уебсайт и разработчик на дипломната работа, свързана с него, декларирам, че анкетната карта ще се използва само за нейните цели.</p>
    </div>

    {!! Form::open(['action'=>'SurveyController@store', 'method'=>'post']) !!}

        <div class="text-center main-fieldset">
            <h2>Анкетна карта</h2>
        </div>

        <fieldset class="text-center section-fieldset">
            <h3>
                Секция първа
                <small>Характеристика на спорта Голф</small>
            </h3>
        </fieldset>

        <fieldset class="question">
            <p>1. Оценете важността на дадените подготовки в скала от 1 - "не е много важно" до 5 - "много е важно".</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('theoretical', 'Теоретична подготовка')}}
                    {{Form::number('theoretical', '', ['min'=>'1', 'max'=>'5', 'name'=>'prep_importance[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('physical', 'Физическа подготовка')}}
                    {{Form::number('physical', '', ['min'=>'1', 'max'=>'5', 'name'=>'prep_importance[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('technical', 'Техническа подготовка')}}
                    {{Form::number('technical', '', ['min'=>'1', 'max'=>'5', 'name'=>'prep_importance[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('tactical', 'Тактическа подготовка')}}
                    {{Form::number('tactical', '', ['min'=>'1', 'max'=>'5', 'name'=>'prep_importance[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('psychological', 'Психологическа подготовка')}}
                    {{Form::number('psychological', '', ['min'=>'1', 'max'=>'5', 'name'=>'prep_importance[]', 'required'=>'required'])}}  
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
        
        <fieldset class="question">
            <p>2. Изразете степента на вашето съгласие със следните твърдения в скала от 1 - "категорично не" до 5 - "категорично да".</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('intensity', 'Интензивността на натоварването в голфа не е висока.')}}
                    {{Form::number('intensity', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('volume', 'Обемът на натоварване е голям.')}}
                    {{Form::number('volume', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('potential', 'Добрата физическа подготовка дава възможност за оптимална проява на техническия потенциал.')}}
                    {{Form::number('potential', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('traumatical', 'Голфът създава предпоставки за травматични проблеми.')}}
                    {{Form::number('traumatical', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('physical_preparation', 'Голфърите рядко провеждат физическа подготовка.')}}
                    {{Form::number('physical_preparation', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('qualities', 'Голфът е спорт, който изискава комплексно развитие на качества.')}}
                    {{Form::number('qualities', '', ['min'=>'1', 'max'=>'5', 'name'=>'degree[]', 'required'=>'required'])}} 
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>3. Изразете степента на Вашето съгласие в скала от 1 - "категорично не" до 5 - "категорично да", че прилагането на голф специфична фитнес програма директно може да окаже влияние на: </p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('length', 'Дължината на удара')}}
                    {{Form::number('length', '', ['min'=>'1', 'max'=>'5', 'name'=>'fitness[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('accuracy', 'Точността на удара')}}
                    {{Form::number('accuracy', '', ['min'=>'1', 'max'=>'5', 'name'=>'fitness[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('coord', 'По–висока степен на координираност и постоянство при изпълнение на удара')}}
                    {{Form::number('coord', '', ['min'=>'1', 'max'=>'5', 'name'=>'fitness[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('fatigue', 'Намаляване на умората')}}
                    {{Form::number('fatigue', '', ['min'=>'1', 'max'=>'5', 'name'=>'fitness[]', 'required'=>'required'])}} 
                </div>
                <div class="entry">
                    {{Form::label('trauma_risk', 'Намаляване риска от травми')}}
                    {{Form::number('trauma_risk', '', ['min'=>'1', 'max'=>'5', 'name'=>'fitness[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="text-center section-fieldset">
            <h3>
                Секция втора
                <small>Умения</small>
            </h3>
        </fieldset>

        <fieldset class="question">
            <p>4. Оценете всяко от физическите качества за оптимални технически умения от 1 - "не е важно" до 10 "много е важно": </p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('strength', 'Сила - изпълнение на дълги удари')}}
                    {{Form::number('strength', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('speed', 'Бързина - темпо и ритъм, с които се изпълнява ударът')}}
                    {{Form::number('speed', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('co_ordination', 'Координираност - гладкост и последователност на движенията (фазова структура)')}}
                    {{Form::number('co_ordination', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('agility', 'Ловкост - умението да се регулира силата и посоката на удара')}}
                    {{Form::number('agility', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('flexibility', 'Гъвкавост - обхват на движение')}}
                    {{Form::number('flexibility', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('stability', 'Стабилност - преодоляване на инерични сили (вътрешни инерционни сили), компресивно и аксиално торзионно натоварване')}}
                    {{Form::number('stability', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('balance', 'Баланс - пренасяне центъра на тежестта на тялото')}}
                    {{Form::number('balance', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('endurance', 'Издръжливост - концентрация и мощ при игра')}}
                    {{Form::number('endurance', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_qualities[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>5. Оценете всяко умение за постигане на успех от 1 - "не е важно" до 10 "много е важно": </p>
            <p><strong>5.1. Физическа подготовка</strong></p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('maxstrength', 'Максимална сила')}}
                    {{Form::number('maxstrength', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('explosivestrength', 'Експлозивна сила')}}
                    {{Form::number('explosivestrength', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('dynamicstrength', 'Динамична сила')}}
                    {{Form::number('dynamicstrength', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('ph_endurance', 'Издръжливост')}}
                    {{Form::number('ph_endurance', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('scope', 'Обхват на движение')}}
                    {{Form::number('scope', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('ph_co_ordination', 'Координираност')}}
                    {{Form::number('ph_co_ordination', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('ph_balance', 'Баланс')}}
                    {{Form::number('ph_balance', '', ['min'=>'1', 'max'=>'10', 'name'=>'ph_prep[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>5. Оценете всяко умение за постигане на успех от 1 - "не е важно" до 10 "много е важно": </p>
            <p><strong>5.2. Техническа подготовка</strong></p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('longgame', 'Добра дълга игра')}}
                    {{Form::number('longgame', '', ['min'=>'1', 'max'=>'10', 'name'=>'succ_skill[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('fairway', 'Добра игра от феъруей')}}
                    {{Form::number('fairway', '', ['min'=>'1', 'max'=>'10', 'name'=>'succ_skill[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('green', 'Добра игра на грийн')}}
                    {{Form::number('green', '', ['min'=>'1', 'max'=>'10', 'name'=>'succ_skill[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('hits', 'Способност за разнообразни удари')}}
                    {{Form::number('hits', '', ['min'=>'1', 'max'=>'10', 'name'=>'succ_skill[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('grip', 'Добър хват и изходна позиция')}}
                    {{Form::number('grip', '', ['min'=>'1', 'max'=>'10', 'name'=>'succ_skill[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>5. Оценете всяко умение за постигане на успех от 1 - "не е важно" до 10 "много е важно": </p>
            <p><strong>5.3. Психологическа подготовка</strong></p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('positive', 'Позитивна нагласа и отношение')}}
                    {{Form::number('positive', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('willingness', 'Желание и мотивация')}}
                    {{Form::number('willingness', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('confidence', 'Увереност')}}
                    {{Form::number('confidence', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('skillstress', 'Умение за справяне с напрежение')}}
                    {{Form::number('skillstress', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('concentration', 'Концентрация')}}
                    {{Form::number('concentration', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('hits_visualization', 'Визуализиране на ударите')}}
                    {{Form::number('hits_visualization', '', ['min'=>'1', 'max'=>'10', 'name'=>'psy_prep[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>5. Оценете всяко умение за постигане на успех от 1 - "не е важно" до 10 "много е важно": </p>
            <p><strong>5.4. Други умения и качества</strong></p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('sturdy', 'Физически здрав')}}
                    {{Form::number('sturdy', '', ['min'=>'1', 'max'=>'10', 'name'=>'other_skills[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('theoretical_knowledge', 'Теоретични знания')}}
                    {{Form::number('theoretical_knowledge', '', ['min'=>'1', 'max'=>'10', 'name'=>'other_skills[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('tactical_knowledge', 'Тактически знания')}}
                    {{Form::number('tactical_knowledge', '', ['min'=>'1', 'max'=>'10', 'name'=>'other_skills[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('other_qualities', 'Друго...')}}
                    {{Form::text('other_qualities', '', ['class'=>'form-control', 'placeholder'=>'Други качества и умения', 'name'=>'other_skills[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>6. Ранжирайте по важност следните фактори за успех в голфа: </p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('permanent', 'Постоянни тренировки')}}
                    {{Form::number('permanent', '', ['min'=>'1', 'max'=>'5', 'name'=>'succ_factors[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('diligent', 'Усърдни тренировки')}}
                    {{Form::number('diligent', '', ['min'=>'1', 'max'=>'5', 'name'=>'succ_factors[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('coach', 'Добър треньор')}}
                    {{Form::number('coach', '', ['min'=>'1', 'max'=>'5', 'name'=>'succ_factors[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('attitude', 'Позитивна вътрешна нагласа')}}
                    {{Form::number('attitude', '', ['min'=>'1', 'max'=>'5', 'name'=>'succ_factors[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('talent', 'Естествена способност - талант, дарба')}}
                    {{Form::number('talent', '', ['min'=>'1', 'max'=>'5', 'name'=>'succ_factors[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
         
        <fieldset class="question">
            <p>7. Оценете причините за провал в голфа от 1 - "много слабо влияе" до 10 - "много силно влияе": </p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('confidence_lose', 'Загуба на увереност')}}
                    {{Form::number('confidence_lose', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('concentration_lose', 'Загуба на концентрация')}}
                    {{Form::number('concentration_lose', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('anxiety', 'Тревожност')}}
                    {{Form::number('anxiety', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('overwhelm', 'Преумора')}}
                    {{Form::number('overwhelm', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('mistakes', 'Грешки и недостатъци при изпълнение на удара')}}
                    {{Form::number('mistakes', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('injuries', 'Контузии')}}
                    {{Form::number('injuries', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('insufficient_ph_pre', 'Недостатъчна физическа подготовка')}}
                    {{Form::number('insufficient_ph_pre', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('nonspecific', 'Други неспецифични причини')}}
                    {{Form::number('nonspecific', '', ['min'=>'1', 'max'=>'10', 'name'=>'failure[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="text-center section-fieldset">
            <h3>
                Секция трета
                <small>Личен опит<br>Мотивация, Вашата голф игра, тренировъчни навици и цели, контузии</small>
            </h3>
        </fieldset>

        <fieldset class="question">
            <p>8. От колко време играете голф?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('less_than_year', 'По-малко от година')}}
                    {{Form::checkbox('less_than_year', 'less_than_year', false, ['name'=>'years_play'])}}
                </div>
                <div class="entry">
                    {{Form::label('years', 'Брой години')}}
                    {{Form::number('years', '', ['name'=>'years_play'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>9. С каква цел играете голф?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('high_sport_results', 'За високи спортни резултати - челни позиции на турнири')}}
                    {{Form::checkbox('high_sport_results', '1', false, ['name'=>'goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('med_sport_results', 'За средни спортни резултати - добро представяне')}}
                    {{Form::checkbox('med_sport_results', '2', false, ['name'=>'goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('for_pleasure', 'За удоволствие и разтоварване - свободно време')}}
                    {{Form::checkbox('for_pleasure', '3', false, ['name'=>'goals[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>10. Колко пъти седмично тренирате и играете голф?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('once', '1 път')}}
                    {{Form::radio('once', '1', null, ['name'=>'times_week', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('twice', '2 пъти')}}
                    {{Form::radio('twice', '2', null, ['name'=>'times_week'])}}
                </div>
                <div class="entry">
                    {{Form::label('three_four', '3-4 пъти')}}
                    {{Form::radio('three_four', '3_4', null, ['name'=>'times_week'])}}
                </div>
                <div class="entry">
                    {{Form::label('four_five', '4-5 пъти')}}
                    {{Form::radio('four_five', '4_5', null, ['name'=>'times_week'])}}
                </div>
                <div class="entry">
                    {{Form::label('five_six', '5-6 пъти')}}
                    {{Form::radio('five_six', '5_6', null, ['name'=>'times_week'])}}
                </div>
                <div class="entry">
                    {{Form::label('seven', '7 пъти')}}
                    {{Form::radio('seven', '7', null, ['name'=>'times_week'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>11. Колко време средно продължава една ваша тренировка по голф?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('hour1', 'До 1 час')}}
                    {{Form::radio('hour1', '1', null, ['name'=>'hours_tren', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('hours1_2', '1-2 часа')}}
                    {{Form::radio('hours1_2', '1_2', null, ['name'=>'hours_tren'])}}
                </div>
                <div class="entry">
                    {{Form::label('hours2_3', '2-3 часа')}}
                    {{Form::radio('hours2_3', '2_3', null, ['name'=>'hours_tren'])}}
                </div>
                <div class="entry">
                    {{Form::label('hours4_5', '4-5 часа')}}
                    {{Form::radio('hours4_5', '4_5', null, ['name'=>'hours_tren'])}}
                </div>
                <div class="entry">
                    {{Form::label('hours5_6', '5-6 часа')}}
                    {{Form::radio('hours5_6', '5_6', null, ['name'=>'hours_tren'])}}
                </div>
                <div class="entry">
                    {{Form::label('more_hours', 'Повече')}}
                    {{Form::radio('more_hours', 'more_hours', null, ['name'=>'hours_tren'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>12. Колко дупки средно изигравате?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('holes_tren', 'В тренировка')}}
                    {{Form::number('holes_tren', '', ['name'=>'holes_avg[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('holes_week', 'В седмицата')}}
                    {{Form::number('holes_week', '', ['name'=>'holes_avg[]', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('holes_month', 'В месеца')}}
                    {{Form::number('holes_month', '', ['name'=>'holes_avg[]', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>13. Кои са вашите основни тренировъчни цели?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('corrections_change_grip', 'Корекции и/или промяна на хвата на удара')}}
                    {{Form::checkbox('corrections_change_grip', '1', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('before_after_hit_routine', 'Преди и след ударна рутина')}}
                    {{Form::checkbox('before_after_hit_routine', '2', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('repeat_effective_move_hit', 'Повтаряемо, ефикасно движение на удара')}}
                    {{Form::checkbox('repeat_effective_move_hit', '3', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('efficiency_start_hit', 'Ефективност на началния удар (дълга игра - максимална и средна дължина, точност, фейд, дроул, в регулация)')}}
                    {{Form::checkbox('efficiency_start_hit', '4', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('fairway_game_approach', 'Игра от феъруей/апроуч')}}
                    {{Form::checkbox('fairway_game_approach', '5', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('game_green', 'Игра на грийн (къс/дълъг път, правилно насочване главата на пътъра, къс/дълъг пич, чип, бункер, грийн в регулация')}}
                    {{Form::checkbox('game_green', '6', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('tech_stability', 'Стабилизиране на техниката - правилно насочване на главата на клъба, посока на замаха, уцелване на суитспот, рилийз, дозиране, вариации на полета на топката (слайс, хук, ниска топка, висока парабола, игра от наклон) и др.')}}
                    {{Form::checkbox('tech_stability', '7', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('speed_green', 'Скорост на грийн - параметри')}}
                    {{Form::checkbox('speed_green', '8', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('read_green', 'Четене на грийн')}}
                    {{Form::checkbox('read_green', '9', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('tact_game_forms', 'Тактически игрални форми, намиране на индивидуална стратегия за игра на определена дупка и игрище')}}
                    {{Form::checkbox('tact_game_forms', '10', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('general_preparation', 'Подобряване на общата подготовка, за да се повишат функционалните възможности - сила, бързина, издръжливост, гъвкавост, ловкост, умения.')}}
                    {{Form::checkbox('general_preparation', '11', false, ['name'=>'basic_goals[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('other_goals', 'Друго')}}
                    {{Form::checkbox('other_goals', '12', false, ['name'=>'basic_goals[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>14. Каква е Вашата голф подготовка според Вас?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('weak', 'Слаба')}}
                    {{Form::radio('weak', 'weak', null, ['name'=>'preparation_level', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('satisfactory', 'Задоволителна')}}
                    {{Form::radio('satisfactory', 'satisfactory', null, ['name'=>'preparation_level'])}}
                </div>
                <div class="entry">
                    {{Form::label('good', 'Добра')}}
                    {{Form::radio('good', 'good', null, ['name'=>'preparation_level'])}}
                </div>
                <div class="entry">
                    {{Form::label('very_good', 'Много добра')}}
                    {{Form::radio('very_good', 'very_good', null, ['name'=>'preparation_level'])}}
                </div>
                <div class="entry">
                    {{Form::label('excellent', 'Отлична')}}
                    {{Form::radio('excellent', 'excellent', null, ['name'=>'preparation_level'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>15. Считате ли, че тренировките Ви по голф са достатъчни за целите, които сте си поставили?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('no', 'Не')}}
                    {{Form::radio('no', 'no', null, ['name'=>'enough_train', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('cant_say', 'Не мога да преценя')}}
                    {{Form::radio('cant_say', 'cant_say', null, ['name'=>'enough_train'])}}
                </div>
                <div class="entry">
                    {{Form::label('yes', 'Да')}}
                    {{Form::radio('yes', 'yes', null, ['name'=>'enough_train'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>16. Колко често загрявате и разтягате по време на тренировка и игра?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('never', 'Никога')}}
                    {{Form::radio('never', 'never', null, ['name'=>'heat', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('rarely', 'Рядко')}}
                    {{Form::radio('rarely', 'rarely', null, ['name'=>'heat'])}}
                </div>
                <div class="entry">
                    {{Form::label('everytime', 'Всеки път')}}
                    {{Form::radio('everytime', 'everytime', null, ['name'=>'heat'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>17. Колко пъти седмично имате тренировки по физическа подготовка ?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('not_once', 'Нито веднъж')}}
                    {{Form::radio('not_once', 'not_once', null, ['name'=>'ph_train', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('1to2', '1-2 пъти')}}
                    {{Form::radio('1to2', '1to2', null, ['name'=>'ph_train'])}}
                </div>
                <div class="entry">
                    {{Form::label('3to4', '3-4 пъти')}}
                    {{Form::radio('3to4', '3to4', null, ['name'=>'ph_train'])}}
                </div>
                <div class="entry">
                    {{Form::label('almost_everyday', 'Почти всеки ден')}}
                    {{Form::radio('almost_everyday', 'almost_everyday', null, ['name'=>'ph_train'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>18. Какви средства използвате за физическа подготовка?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('heat_up_ex', 'Упражнения за разгряване')}}
                    {{Form::checkbox('heat_up_ex', '1', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('gen_develop_char_ex', 'Упражнения с общо развиващ характер')}}
                    {{Form::checkbox('gen_develop_char_ex', '2', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('own_weight_ex', 'Упражнения с преодоляване на собственото тегло')}}
                    {{Form::checkbox('own_weight_ex', '3', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('basic_muscle_groups', 'Упражнения за основните мускулни групи')}}
                    {{Form::checkbox('basic_muscle_groups', '4', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('stretching', 'Стречинг - разтягащи упражнения')}}
                    {{Form::checkbox('stretching', '5', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('jump_ex', 'Упражнения с подскоци')}}
                    {{Form::checkbox('jump_ex', '6', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('bosu_gym_ball_ex', 'Упражнения с босу и гимнастическа топка')}}
                    {{Form::checkbox('bosu_gym_ball_ex', '7', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('med_ball_atletic_ball_ex', 'Упражнения с медицинска топка и атлетическа тояжка')}}
                    {{Form::checkbox('med_ball_atletic_ball_ex', '8', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('rope_t_rex_ex', 'Упражнения с въже и т-рекс')}}
                    {{Form::checkbox('rope_t_rex_ex', '9', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('rope_elastic_ex', 'Упражнения с въженце и ластици')}}
                    {{Form::checkbox('rope_elastic_ex', '10', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('fitness_dumbbells_ex', 'Упражнения с фитнес уреди и гирички - леки утежнения')}}
                    {{Form::checkbox('fitness_dumbbells_ex', '11', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('big_weights_ex', 'Упражнения с около-пределно тегло - големи тежести')}}
                    {{Form::checkbox('big_weights_ex', '12', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('max_strength_ex', 'Упражнения с пределно тегло - максимална сила')}}
                    {{Form::checkbox('max_strength_ex', '13', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('explosive_strength_ex', 'Упражнения за развитие на експлозивна сила')}}
                    {{Form::checkbox('explosive_strength_ex', '14', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('dynamic_strength_ex', 'Упражнения за развитие на динамична сила')}}
                    {{Form::checkbox('dynamic_strength_ex', '15', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('strength_ability_ex', 'Упражнения за развитие на силова издръжливост')}}
                    {{Form::checkbox('strength_ability_ex', '16', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('speed_strength_ability_ex', 'Упражнения за развитие на скоростно силова издръжливост')}}
                    {{Form::checkbox('speed_strength_ability_ex', '17', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('begova_prep', 'Бегова подготовка')}}
                    {{Form::checkbox('begova_prep', '18', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('supporting_ex', 'Поддържащи тренировки')}}
                    {{Form::checkbox('supporting_ex', '19', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('tonning_ex', 'Тонизиращи тренировки')}}
                    {{Form::checkbox('tonning_ex', '20', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('recover_ex', 'Възстановителни тренировки')}}
                    {{Form::checkbox('recover_ex', '21', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('other_sports_ex', 'Упражнения, заимствани от други спортове')}}
                    {{Form::checkbox('other_sports_ex', '22', false, ['name'=>'ph_prep_ex[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>19. Считате ли, че тренировките Ви по физическа подготовка са достатъчни?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('ph_prep_no', 'Не')}}
                    {{Form::radio('ph_prep_no', 'no', null, ['name'=>'ph_prep_enough', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('ph_prep_cant_say', 'Не мога да преценя')}}
                    {{Form::radio('ph_prep_cant_say', 'cant_say', null, ['name'=>'ph_prep_enough'])}}
                </div>
                <div class="entry">
                    {{Form::label('ph_prep_yes', 'Да')}}
                    {{Form::radio('ph_prep_yes', 'yes', null, ['name'=>'ph_prep_enough'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
        
        <fieldset class="question">
            <p>20. Контузвали ли сте се по време на тренировка или игра, така че да сте принудени да спрете или да промените начина си на игра за повече от една-две седмици?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('injury_yes', 'Да')}}
                    {{Form::radio('injury_yes', 'yes', null, ['name'=>'bad_injuries', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('injury_no', 'Не')}}
                    {{Form::radio('injury_no', 'no', null, ['name'=>'bad_injuries'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
        
        <fieldset class="question">
            <p>21. Колко често изпитвате болка в лумбалната област по време на или след тренировка/игра на 18 и повече дупки? 1 е  "никога", а 10 е "всеки път".</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::number('pain_after_game', '', ['min'=>'1', 'max'=>'10', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
        
        <fieldset class="question">
            <p>22. Получавали ли сте някои от "yips" симптомите по време на продължителна тренировка/игра/участие на турнир на 18 и повече дупки? 1 е "никога", а 10 е "всеки път".</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::number('yips_symptoms', '', ['min'=>'1', 'max'=>'10', 'required'=>'required'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="question">
            <p>23. Какви средства използвате за психологическа подготовка?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('relax_technics', 'Техники за разпускане')}}
                    {{Form::checkbox('relax_technics', '1', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('psy_regulation_methods', 'Методи за психологическа саморегулация и регулиране на разговорите в себе си')}}
                    {{Form::checkbox('psy_regulation_methods', '2', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('blood_supply_improvement', 'Упражнения за подобряване на кръвоснабдяването и сърдечната дейност')}}
                    {{Form::checkbox('blood_supply_improvement', '3', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('calmness_ex', 'Упражнения за спокойствие и снемане на тревожността')}}
                    {{Form::checkbox('calmness_ex', '4', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('concentration_ex', 'Упражнения за концентрация и раз-съсредоточаване')}}
                    {{Form::checkbox('concentration_ex', '5', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('breath_rythm', 'Упражнения за дихателната ритмика')}}
                    {{Form::checkbox('breath_rythm', '6', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('visualization_ex', 'Упражнения за предизвикване на представи')}}
                    {{Form::checkbox('visualization_ex', '7', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('motor_train_ex', 'Упражнения по идеомоторна тренировка')}}
                    {{Form::checkbox('motor_train_ex', '8', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('meditation_ex', 'Упражнения по медитация върху фигура или дума')}}
                    {{Form::checkbox('meditation_ex', '9', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('emotional_state_ex', 'Упражнения за предизвикване на желано емоционално състояние; специализирани комбинирани въздействия по време на игра')}}
                    {{Form::checkbox('emotional_state_ex', '10', false, ['name'=>'psy_prep_tools[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset class="text-center section-fieldset">
            <h3>
                Секция четвърта
                <small>Други въпроси и персонални данни</small>
            </h3>
        </fieldset>

        <fieldset class="question">
            <p>24. Бихте ли участвали в експериментални изследвания за усъвършенстване на тренировъчния и състезателния процес в голфа?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('experimental_study_no', 'Не')}}
                    {{Form::radio('experimental_study_no', 'no', null, ['name'=>'experimental_study', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('experimental_study_maybe', 'Може би')}}
                    {{Form::radio('experimental_study_maybe', 'maybe', null, ['name'=>'experimental_study'])}}
                </div>
                <div class="entry">
                    {{Form::label('experimental_study_yes', 'Да')}}
                    {{Form::radio('experimental_study_yes', 'yes', null, ['name'=>'experimental_study'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>
        
        <fieldset class="question">
            <p>23. От кои спортове могат да се прилагат треничовъчни средства в голфа според Вас?</p>
            <div class="form-group">
                <div class="entry">
                    {{Form::label('athletics', 'Лека атлетика')}}
                    {{Form::checkbox('athletics', '1', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('tennis', 'Тенис')}}
                    {{Form::checkbox('tennis', '2', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('sport_shooting', 'Спортна стрелба')}}
                    {{Form::checkbox('sport_shooting', '3', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('swimming', 'Плуване')}}
                    {{Form::checkbox('swimming', '4', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('hockey', 'Хокей')}}
                    {{Form::checkbox('hockey', '5', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('archery', 'Стрелба с лък')}}
                    {{Form::checkbox('archery', '6', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('academic_canoeing', 'Академично гребане')}}
                    {{Form::checkbox('academic_canoeing', '7', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('canoe_kayak', 'Кану - каяк')}}
                    {{Form::checkbox('canoe_kayak', '8', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::label('other_sports', 'Друг спорт...')}}
                    {{Form::checkbox('other_sports', '9', false, ['name'=>'other_sports[]'])}}
                </div>
                <div class="entry">
                    {{Form::text('other_sports_field', '', ['placeholder'=>'Друг спорт...', 'disabled'=>'disabled', 'id'=>'other_sports_field', 'name'=>'other_sports[]'])}}
                </div>
            </div>
            {{Form::submit('Следващ', ['class'=>'btn btn-primary'])}}
        </fieldset>

        <fieldset id="personal-info popup-box">
            <div class="entry">
                {{Form::label('nationality', 'Националност:')}}
                {{Form::text('nationality', '', ['required'=>'required'])}}
            </div>
            <div class="entry gender-entry">
                <p>
                    Пол:
                </p>
                <div class="entry">
                    {{Form::label('male', 'Мъж')}}
                    {{Form::radio('male', 'male', null, ['name'=>'gender', 'required'=>'required'])}}
                </div>
                <div class="entry">
                    {{Form::label('female', 'Жена')}}
                    {{Form::radio('female', 'female', null, ['name'=>'gender'])}}
                </div>
            </div>
            <div class="entry">
                {{Form::label('age', 'На каква възраст сте:')}}
                {{Form::number('age', '', ['required'=>'required'])}}
            </div>
            <div class="entry">
                {{Form::label('height', 'Какъв е вашият ръст:')}}
                {{Form::number('height', '', ['required'=>'required'])}}
            </div>
            <div class="entry">
                {{Form::label('weight', 'Колко е вашето тегло:')}}
                {{Form::number('weight', '', ['required'=>'required'])}}
            </div>
            <div class="entry">
                {{Form::label('handicap', 'Колко е вашият хендикап?')}}
                {{Form::number('handicap', '', ['name'=>'handicap'])}}
            </div>
            <div class="entry handicap-entry">
                {{Form::label('no_handicap', 'Нямам хендикап')}}
                {{Form::checkbox('no_handicap', 'no_handicap', false, ['name'=>'handicap'])}}
            </div>
        </fieldset>

        {{Form::submit('Изпрати', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection