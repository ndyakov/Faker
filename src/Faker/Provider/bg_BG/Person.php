<?php

namespace Faker\Provider\bg_BG;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{titleMale}} {{lastNameMale}}'
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{titleFemale}} {{lastNameFemale}}'
    );

    protected static $firstNameMale = array(
        'Аблен', 'Август', 'Авраам', 'Агоп', 'Адам', 'Адриан', 'Албен', 'Алберт', 'Алек',
        'Бинко', 'Благо', 'Благовест', 'Благой', 'Благомир',  'Богдан', 'Божидар', 'Бойко', 'Бонко',
        'Веселин', 'Виктор', 'Вилислав', 'Вилиян', 'Винко', 'Виталий', 'Вихрен', 'Владимир',
        'Галин', 'Ганьо', 'Генади', 'Генчо', 'Геньо', 'Гео', 'Геодим', 'Геомил', 'Георги',
        'Делян',  'Денис', 'Денислав', 'Деньо', 'Десислав', 'Деян', 'Диан', 'Дилян',
        'Евтим', 'Егор', 'Едуард', 'Елеан', 'Елин', 'Емил', 'Ерол', 'Етиен', 'Емануил',
        'Захари', 'Звездомир', 'Здравко', 'Златан', 'Златимир', 'Зоран',
        'Илия', 'Илиян', 'Илко', 'Искрен', 'Искър', 'Йоан',
        'Кевин', 'Кеворк', 'Кирил', 'Китодар', 'Климент',  'Кольо',
        'Леон', 'Леонид', 'Манол', 'Марин', 'Марио', 'Мариян', 'Мартин', 'Наско', 'Наум',
        'Невен', 'Неделин', 'Недялко', 'Нейко', 'Нейчо', 'Ненко',
        'Огнян', 'Олег', 'Омуртаг', 'Павел', 'Паисий',  'Панайот', 'Пантелей',
        'Паскал', 'Пейко', 'Пейо', 'Пейчо', 'Пенко', 'Петко',
        'Рангел', 'Раян', 'Ричард', 'Робин', 'Ростислав',
        'Светлю', 'Светозар', 'Светослав', 'Свилен', 'Симеон', 'Слави',
        'Тервел', 'Тихомир', 'Тодор', 'Тома', 'Томас', 'Тонислав', 'Тонко',
        'Флориан', 'Флорин', 'Франк', 'Францислав', 'Фреди', 'Хари', 'Хектор',
        'Хрисим', 'Хрисимир', 'Христо', 'Христофор',
        'Цоньо', 'Чавдар', 'Чанко', 'Чедомир', 'Чудомир', 'Шишман',
        'Щериян', 'Юли', 'Юлиан', 'Юлиян', 'Юрдан', 'Явор', 'Яне', 'Янко', 'Ясен'
    );

    protected static $firstNameFemale = array(
        'Аксентия', 'Александра', 'Алисия', 'Ана-Мария', 'Аурора', 'Багра',
        'Беломира', 'Берислава', 'Биянка', 'Благосвета', 'Валерия', 'Валя', 'Верена', 'Виктория',
        'Галена', 'Галина', 'Грета', 'Гергана', 'Глория','Дакота', 'Дамяна',
        'Дария', 'Дафинка', 'Деа', 'Дениславена', 'Деница', 'Джулия', 'Дилмана', 'Димка',
        'Добрина', 'Евдокия', 'Елеонета', 'Ели', 'Елица', 'Емануила', 'Емма', 'Еница', 'Жаклин',
        'Желязка', 'Живомира', 'Захаринка', 'Златея', 'Златка', 'Златомира',
        'Иглика', 'Илианна', 'Ира', 'Йоана', 'Йорданка', 'Кети', 'Клара',
        'Константина', 'Корнелия', 'Кристиана', 'Лилия', 'Линда', 'Лия', 'Луна',
        'Мария', 'Маруся', 'Маша', 'Миглена', 'Мила', 'Минка', 'Моника', 'Настия',
        'Николина', 'Норка', 'Орхидея', 'Радимира', 'Роза', 'Ростислава', 'Сабина',
        'Светломира', 'Сиена', 'Симона', 'Славея', 'Славка', 'Стефани', 'Таня',
        'Теа', 'Теодора', 'Хана', 'Христа', 'Цветана', 'Цветелина', 'Юлия', 'Ягода', 'Яна'
    );

    protected static $lastNameMale = array(
        'Абаджиев', 'Аврамов', 'Андреев', 'Арабаджиев', 'Арнаудов', 'Атанасов', 'Богоев',
        'Божинов', 'Бонев', 'Борисов', 'Бояджиев', 'Ванчев', 'Вачков', 'Велчев',
        'Виденов', 'Витяков', 'Вълчанов', 'Вълчев', 'Гемеджиев', 'Георгиев', 'Герасимов',
        'Гоцев', 'Гошев', 'Григориев', 'Григоров', 'Груев', 'Грънчаров', 'Гълъбов',
        'Гюзелев', 'Дамянов', 'Димитров', 'Добрев', 'Дочев', 'Драганов', 'Дюлгеров',
        'Дянков', 'Ерменков', 'Желев', 'Жендов', 'Живков', 'Зангочев', 'Ивков',
        'Игнатов', 'Измирлиев', 'Инджов', 'Йорданов', 'Йосифов', 'Кантарджиев', 'Каравелов',
        'Караджов', 'Карастоянов', 'Касабов', 'Кескинов', 'Ковачев', 'Константинов', 'Котев',
        'Кочев', 'Кушев', 'Куюмджиев', 'Кьосев', 'Лефтеров', 'Мавродиев', 'Марангозов',
        'Маринов', 'Минков', 'Минчев', 'Митев', 'Митов', 'Михайлов', 'Михов',
        'Младенов', 'Москов', 'Налбантов', 'Николов', 'Обрешков', 'Оракчиев', 'Орлов',
        'Панайотов', 'Панчев', 'Петков', 'Петров', 'Пешев', 'Попов', 'Първанов',
        'Радев', 'Радославов', 'Русев', 'Семерджиев', 'Симеонов', 'Соколов', 'Солаков',
        'Спасов', 'Ставрев', 'Стайков', 'Стамов', 'Станев', 'Станишев', 'Стойков',
        'Стойчев', 'Стоянов', 'Събев', 'Такев', 'Танев', 'Танчев', 'Терзиев',
        'Тодоров', 'Томов', 'Тончев', 'Тошев', 'Трифонов', 'Туджаров', 'Тунчев',
        'Фучеджиев', 'Хаджиев', 'Хитров', 'Христов', 'Цветанов', 'Цветков', 'Цеков',
        'Чакъров', 'Червенков', 'Чернев', 'Чешмеджиев', 'Шейтанов', 'Яворов'
    );

    protected static $lastNameFemale = array(
        'Абаджиева', 'Аврамова', 'Андреева', 'Арабаджиева', 'Арнаудова', 'Атанасова', 'Богоева',
        'Божинова', 'Бонева', 'Борисова', 'Бояджиева', 'Ванчева', 'Вачкова', 'Велчева',
        'Виденова', 'Витякова', 'Вълчанова', 'Вълчева', 'Гемеджиева', 'Георгиева', 'Герасимова',
        'Гоцева', 'Гошева', 'Григориева', 'Григорова', 'Груева', 'Грънчарова', 'Гълъбова',
        'Гюзелева', 'Дамянова', 'Димитрова', 'Добрева', 'Дочева', 'Драганова', 'Дюлгерова',
        'Дянкова', 'Ерменкова', 'Желева', 'Жендова', 'Живкова', 'Зангочева', 'Ивкова',
        'Игнатова', 'Измирлиева', 'Инджова', 'Йорданова', 'Йосифова', 'Кантарджиева', 'Каравелова',
        'Караджова', 'Карастоянова', 'Касабова', 'Кескинова', 'Ковачева', 'Константинова', 'Котева',
        'Кочева', 'Кушева', 'Куюмджиева', 'Кьосева', 'Лефтерова', 'Мавродиева', 'Марангозова',
        'Маринова', 'Минкова', 'Минчева', 'Митева', 'Митова', 'Михайлова', 'Михова',
        'Младенова', 'Москова', 'Налбантова', 'Николова', 'Обрешкова', 'Оракчиева', 'Орлова',
        'Панайотова', 'Панчева', 'Петкова', 'Петрова', 'Пешева', 'Попова', 'Първанова',
        'Радева', 'Радославова', 'Русева', 'Семерджиева', 'Симеонова', 'Соколова', 'Солакова',
        'Спасова', 'Ставрева', 'Стайкова', 'Стамова', 'Станева', 'Станишева', 'Стойкова',
        'Стойчева', 'Стоянова', 'Събева', 'Такева', 'Танева', 'Танчева', 'Терзиева',
        'Тодорова', 'Томова', 'Тончева', 'Тошева', 'Трифонова', 'Туджарова', 'Тунчева',
        'Фучеджиева', 'Хаджиева', 'Хитрова', 'Христова', 'Цветанова', 'Цветкова', 'Цекова',
        'Чакърова', 'Червенкова', 'Чернева', 'Чешмеджиева', 'Шейтанова', 'Яворова'
    );

    protected static $titleMale = array('Г-н', 'Др.');
    protected static $titleFemale = array('Г-жа', 'Г-ца', 'Др.');

    /**
     * @param string|null $gender 'male', 'female' or null for any
     * @example 'Чанталиев'
     */
    public function lastName($gender = null)
    {
        if ($gender === static::GENDER_MALE) {
            return static::lastNameMale();
        } elseif ($gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return $this->generator->parse(static::randomElement(static::$lastNameFormat));
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::$lastNameFemale);
    }
}
