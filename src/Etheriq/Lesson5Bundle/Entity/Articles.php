<?php
/**
 * Created by PhpStorm.
 * File: Articles.php
 * User: Yuriy Tarnavskiy
 * Date: 10.11.13
 * Time: 20:31
 * To change this template use File | Settings | File Templates.
 */

namespace Etheriq\Lesson5Bundle\Entity;


class Articles
{
    protected $articlesCount;
    protected $articlesText;
    protected $articlesPopularity;

    public function __construct()
    {
        $this->setArticlesCount($this->generateArticlesCount());
        $this->setArticlesText($this->generateArticlesText());
        $this->setArticlesPopularity($this->generateArticlesPopularity());
    }

    /**
     * @param mixed $articlesCount
     */
    public function setArticlesCount($articlesCount)
    {
        $this->articlesCount = $articlesCount;
    }

    /**
     * @return mixed
     */
    public function getArticlesCount()
    {
        return $this->articlesCount;
    }

    /**
     * @param mixed $articlesPopularity
     */
    public function setArticlesPopularity($articlesPopularity)
    {
        $this->articlesPopularity = $articlesPopularity;
    }

    /**
     * @return mixed
     */
    public function getArticlesPopularity()
    {
        return $this->articlesPopularity;
    }

    /**
     * @param mixed $articlesText
     */
    public function setArticlesText($articlesText)
    {
        $this->articlesText = $articlesText;
    }

    /**
     * @return mixed
     */
    public function getArticlesText()
    {
        return $this->articlesText;
    }

    private function generateArticlesCount()
    {
        return $countArticles = rand(0, 10);
    }

    private function generateArticlesText()
    {
        $randomIndex = rand(0, 14);
        $textOfArticles = array(
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae metus quam. In non purus vitae lorem bibendum malesuada tempus nec erat. Curabitur ornare molestie rhoncus. Aliquam adipiscing tincidunt turpis, et consequat lectus viverra eu. Phasellus eget vehicula velit. Etiam ut quam vehicula, elementum nunc ut, congue neque. In orci odio, elementum pulvinar cursus rhoncus, venenatis ac elit. Nulla ut ipsum a quam facilisis bibendum ut sed metus.',
            'Fusce volutpat mattis urna, id tristique tellus ullamcorper quis. Phasellus luctus lacus enim, non pulvinar tortor vulputate quis. Sed eget leo lobortis, auctor orci porta, congue purus. Aliquam tincidunt massa et sapien mollis varius. Vestibulum sit amet pharetra lorem. Suspendisse id luctus ante, eu pellentesque sem. Nunc adipiscing nulla vel dolor pulvinar, in dignissim lectus fermentum. Praesent et dui eu ligula tincidunt lacinia.',
            'Aliquam placerat sollicitudin mauris eget pretium. Suspendisse id ultrices nisl. Pellentesque sollicitudin odio vel tortor convallis rhoncus. Nulla id tellus laoreet, imperdiet risus eget, ornare est. Donec id leo tincidunt, vulputate elit vitae, vestibulum nunc. Nam eget velit iaculis lorem porta posuere. Proin fermentum arcu quis tristique faucibus. Curabitur id posuere urna. Mauris sit amet dolor aliquam, sagittis leo nec, rutrum justo. In ut lectus quis neque volutpat ullamcorper vel id ipsum. Praesent volutpat augue ac mauris ornare, in luctus diam rhoncus. Pellentesque at eros placerat, lacinia dui ut, iaculis orci. Morbi pulvinar ultricies laoreet. In est lectus, vulputate in odio eu, porta sagittis erat. Proin ac iaculis ligula. Vivamus quis ultricies leo.',
            'In a tincidunt ante, nec faucibus risus. Fusce arcu arcu, blandit vel tellus et, pulvinar sollicitudin sem. Mauris pellentesque metus odio, eget elementum quam porta non. Maecenas id odio nisl. Donec augue elit, vestibulum vitae massa at, gravida sagittis turpis. Aenean blandit eu urna vitae iaculis. Nulla scelerisque et augue a consequat. Maecenas sed dignissim dolor. Sed laoreet leo ac ipsum cursus feugiat sit amet et arcu. Integer volutpat eu est quis aliquam. Sed dolor urna, consequat id elit nec, interdum aliquet neque. Aliquam blandit ultrices dui nec porta. Suspendisse ultricies dapibus purus, ut mattis mi eleifend scelerisque. Donec metus tortor, porttitor vel elit eu, aliquet auctor lectus. Curabitur lobortis purus mauris, eu varius magna cursus id. In faucibus sodales accumsan.',
            'Donec quis neque dolor. Suspendisse porttitor neque mauris, sit amet condimentum mauris condimentum ut. Donec magna elit, vehicula eget est at, accumsan dignissim elit. Donec ante felis, aliquet a leo in, posuere dictum ante. Pellentesque id nulla consectetur, fringilla lacus sit amet, iaculis diam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin eleifend bibendum risus, in posuere eros lacinia vel. Nulla et ligula et sem varius mattis. Mauris iaculis justo ligula. Quisque ullamcorper dui ac consequat lacinia. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sit amet erat ultricies, vehicula neque molestie, fringilla erat. Fusce malesuada justo et gravida consectetur. Sed auctor feugiat interdum. Etiam ut metus mauris. Donec blandit odio vitae neque consequat elementum.',
            'Morbi interdum luctus bibendum. Aenean placerat tempor consectetur. Phasellus tellus est, blandit id nulla id, sodales aliquet elit. Suspendisse a eleifend lacus. Sed non tristique nunc. Integer pellentesque tortor vel nunc rutrum, in varius justo consectetur. Integer mattis diam commodo leo dapibus posuere. Phasellus nec orci condimentum, auctor risus quis, facilisis mauris. Nulla ut nisi ante. Morbi imperdiet in est sed mattis. Proin aliquam turpis non ultricies lacinia. Maecenas eget lacinia dolor, egestas ultrices odio. In fringilla neque vel dignissim cursus. Quisque quis justo nisi.',
            'Sed a pellentesque tellus, feugiat elementum nisi. Phasellus eu placerat arcu. Vestibulum nec nulla lectus. Etiam a eros accumsan sem semper varius. Curabitur adipiscing nisi tortor, vitae porttitor turpis consectetur nec. Fusce scelerisque ligula vel urna faucibus varius. Phasellus pretium, urna eu sagittis dapibus, quam libero lacinia felis, congue adipiscing leo eros nec massa. Maecenas lacinia in lectus id interdum.',
            'Nulla facilisi. In mollis sollicitudin nunc porttitor dapibus. Ut interdum dolor id ultricies pulvinar. Nulla imperdiet scelerisque justo euismod pretium. Proin lobortis vehicula fermentum. Vestibulum nec odio eget mauris eleifend porttitor. Donec vel iaculis ligula. Proin porttitor vitae lorem sit amet vestibulum. Phasellus sed lorem egestas, faucibus ante vitae, vestibulum libero.',
            'In consectetur turpis sit amet leo congue gravida. Sed aliquam sagittis tellus eu bibendum. Etiam vitae tellus sit amet odio viverra fermentum. Nulla ut felis dui. Ut arcu sapien, auctor et est id, ornare ultricies lectus. Mauris tempor felis id tellus pretium consequat. Sed id massa purus.',
            'Nullam commodo vitae massa et condimentum. In ut arcu quam. Praesent convallis, odio sed porttitor sagittis, sapien nisl imperdiet mi, non pharetra justo neque eu augue. Vestibulum fringilla libero quis fringilla volutpat. Integer pretium et nunc et cursus. Sed quis enim quis ante facilisis malesuada eget et nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin lobortis eget diam et eleifend. Sed ut mollis tellus. Cras sagittis tristique tristique. Duis rutrum, nibh eu convallis suscipit, enim justo semper nisl, ut congue mauris ipsum sed tortor. Integer eu mattis diam, non vulputate mi. Nulla sagittis tellus id tortor tempor mollis.',
            'In tortor erat, suscipit ut lacus vel, suscipit sollicitudin urna. Vestibulum semper velit vitae arcu elementum porttitor. Praesent nisl justo, cursus vitae eleifend quis, auctor sed enim. Sed tristique urna at sem commodo aliquet quis at lorem. Vivamus aliquam id quam eu vulputate. Curabitur condimentum sem id odio tristique, sit amet placerat risus pellentesque. Integer sagittis faucibus velit nec bibendum. Donec sollicitudin nec orci a tincidunt. Morbi eget dui ornare, ultrices nunc at, imperdiet nulla. Phasellus vitae ligula vitae mauris convallis aliquet. Aliquam tincidunt facilisis vulputate. Praesent pretium diam in cursus vestibulum. Etiam feugiat enim non lectus viverra imperdiet nec eget est.',
            'Sed lacinia, nibh non congue ultricies, lacus nulla elementum dui, et suscipit urna orci vitae metus. Nunc tincidunt, massa vitae euismod blandit, felis libero elementum tellus, eu aliquam eros mauris vel mauris. Integer metus turpis, pharetra ac interdum fermentum, ultricies id mi. Vestibulum ut placerat turpis, in vulputate magna. Nunc egestas aliquet augue, at mollis risus pretium et. Vivamus a libero pellentesque, condimentum purus at, volutpat dolor. Nunc volutpat ligula lacus, sed placerat metus porttitor quis. Sed elementum est ac malesuada consectetur. Donec ac erat imperdiet ante sagittis volutpat. Aliquam accumsan nibh ut enim semper, eget sagittis leo pulvinar. Vestibulum mollis neque nec arcu condimentum, vel feugiat ligula ultricies.',
            'Curabitur posuere dolor sed pellentesque sollicitudin. Morbi ut pulvinar magna. Vestibulum lorem quam, dictum a orci vel, posuere tincidunt libero. Maecenas et sapien vel quam tincidunt fringilla. Donec ultrices gravida porta. Nunc lobortis hendrerit elit sagittis rutrum. Etiam sed sem non dui congue bibendum. Ut tortor quam, blandit ac facilisis commodo, laoreet nec orci. Maecenas varius erat sit amet dui molestie pellentesque. Morbi purus orci, congue in ultrices non, dapibus a leo. Etiam posuere lacus et eleifend convallis. Proin venenatis cursus leo. Nam a nisi pulvinar, iaculis odio id, feugiat sapien.',
            'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas sit amet facilisis dolor. Mauris gravida rhoncus sem, molestie fermentum dui. Nunc mi urna, interdum ut lorem quis, suscipit vestibulum augue. Cras tortor nunc, tincidunt eget quam lobortis, imperdiet porta est. Nam sapien tellus, adipiscing quis interdum ultricies, laoreet ut ligula. Suspendisse id turpis quis ante consectetur fringilla. In viverra risus vel nisi venenatis mattis in ac elit. In molestie lorem vitae leo tincidunt, eget consectetur eros ultrices. Nam ac erat quis libero condimentum euismod vel in elit. Sed dapibus ligula eget erat sagittis fermentum. Vivamus iaculis justo non leo semper, sed euismod mauris lobortis. Ut sodales orci ullamcorper quam mollis, id posuere ipsum tempus.',
            'Sed aliquam risus ut ligula rutrum sagittis. Praesent ultricies et lacus vitae euismod. Duis facilisis ut eros vitae ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce purus quam, tempor eget nunc id, tempus tincidunt leo. Curabitur sem lacus, fringilla sit amet dui id, posuere vehicula nibh. Nullam vitae convallis velit, eget commodo libero. Suspendisse sed pulvinar massa. Vivamus id faucibus mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse adipiscing vitae enim et volutpat. Donec faucibus lacinia urna at vulputate. Suspendisse gravida neque at metus gravida, non rutrum sem dictum. Ut felis magna, malesuada vel suscipit ac, congue quis orci. Sed tempus egestas ligula, eu fringilla nisl commodo et. Nunc non velit sed justo porttitor ullamcorper.'
        );

        return $textOfArticles[$randomIndex];
    }

    private function generateArticlesPopularity()
    {
        return $randomPercent = rand(1, 100);
    }
} 