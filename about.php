<?php
require("base.php");
?>

<?php
$age = strtotime('6 September 2003');


function humanTiming ($time)
{

    $time = time() - $time; // to get the time since that moment
    $time = ($time<1)? 1 : $time;
    $tokens = array (
        31536000 => '',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'':'');
    }

}
?>

<div class="page about">
    <div class="infobox">
        <img src="/assets/pfp.jpg">

        <div class="info">
            <p>Name</p>
            <p>Alice</p>
        </div>
        
        <div class="info">
            <p>Age</p>
            <p><?php echo humanTiming($age)?></p>
        </div>

        <div class="info">
            <p>Pronouns</p>
            <p>She/Her</p>
        </div>
    </div>

    <div class="about_text">
    Hi! I'm Alice! I'm an <?php echo humanTiming($age)?> year old neurodivergent trans girl and an aspiring writer. <br>My pronouns are She/Her but I'm cool with basically anything thats not masculine.<br> I aspire to be a lot of things but writing is my focus! I hyperfixate on a lot of things but RWBY is probably my biggest!<br> You can see more of the things I like on my <a href="/interests.html">Interests</a> page!<br> I'm a very creative person but I struggle with the motivation to actually make things. I'm getting better every day though and you can see the things I actually put out on my <a href="/creations.html">Creations</a> page! <br>Finally you can find me on social media at my <a href="/interests.html">Links</a> page.<br> I'm not a very social person though so it's a bit of a ghost town. I'm always open to meeting new people and my DM's are open but I'm also a very anxious person, I'm sorry if I don't respond to your DM's!
        <div class="Sections">

            <div class="Section">
                <h2>DNI</h2>
                <ul>
                    <li>If you're transphoic or bigoted in any way</li>
                    <li>If you think systems aren't valid</li>
                    <li>If you think neopronouns aren't valid</li>
                </ul> 
            </div>

            <div class="Section">
                <h2>Triggers</h2>
                <ul>
                    <li>Harsh criticism of me and the things that I like can be triggering to me, but if you have good intentions and contructive criticism I can probably handle it :P</li>
                </ul> 
            </div>

        </div>
    </div>

</div>

