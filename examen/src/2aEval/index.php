<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightcyan;
        }

        .center {
            margin: auto;
            width: 60%;
            padding: 10px;
            background-color: lightgreen;
        }

        .element {
            display: inline-block;
            width: 100px;
            height: 120px;
            font-size: .6em;
            text-align: center;
            margin: 10px;
        }

        .element,
        .center {
            -moz-box-shadow: 3px 3px 5px 6px rgb(87, 137, 87);
            -webkit-box-shadow: 3px 3px 5px 6px rgb(87, 137, 87);
            box-shadow: 3px 3px 5px 6px rgb(87, 137, 87);
            border-radius: 10px;
            /*supported by all latest Browser*/
            -moz-border-radius: 10px;
            /*For older Browser*/
            -webkit-border-radius: 10px;
            /*For older Browser*/
            border: 3px solid navy;
        }

        .element img {
            width: 3em;
            vertical-align: middle;
        }

        .on {
            background-color: lightyellow;
        }

        .off {
            background-color: lightslategray;
        }

        h1 {
            font-size: 1.5em;
            text-align: center;
            background-color: black;
            color: azure;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="center">
        <h1>BIG STADIUM - LIGHTING CONTROL PANEL</h1>
        <form action="" method="post">
            <select name="filter">
                <option value='all'>All</option>
                <option value='1'>Fondo Norte</option>
                <option value='2'>Fondo Sur</option>
                <option value='3'>Grada Este</option>
                <option value='4'>Grada Oeste</option>
            </select>
            <input type="submit" value="Filter by zone">
        </form>
        <div class='element off'>
            <h4><a href='changestatus.php?id=1&status=on'><img src='img/bulb-icon-off.png'></a> T27G53C93</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=2&status=on'><img src='img/bulb-icon-off.png'></a> B28K61V46</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=3&status=off'><img src='img/bulb-icon-on.png'></a> F99C65X41</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=4&status=on'><img src='img/bulb-icon-off.png'></a> J12F67N45</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=5&status=off'><img src='img/bulb-icon-on.png'></a> N52U60D45</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=6&status=off'><img src='img/bulb-icon-on.png'></a> H38F87L81</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=7&status=on'><img src='img/bulb-icon-off.png'></a> C58T44L58</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=8&status=off'><img src='img/bulb-icon-on.png'></a> T51S43A59</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=9&status=off'><img src='img/bulb-icon-on.png'></a> U39R34K71</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=10&status=off'><img src='img/bulb-icon-on.png'></a> T51S18P58</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=11&status=on'><img src='img/bulb-icon-off.png'></a> M24E12V60</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=12&status=off'><img src='img/bulb-icon-on.png'></a> X56I19D88</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=13&status=on'><img src='img/bulb-icon-off.png'></a> K34Y58O34</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=14&status=on'><img src='img/bulb-icon-off.png'></a> K23F17K32</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=15&status=off'><img src='img/bulb-icon-on.png'></a> C62O28F63</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=16&status=on'><img src='img/bulb-icon-off.png'></a> G78J41T62</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=17&status=on'><img src='img/bulb-icon-off.png'></a> K26G50O25</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=18&status=off'><img src='img/bulb-icon-on.png'></a> U57K42I88</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=19&status=off'><img src='img/bulb-icon-on.png'></a> M88G83I01</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=20&status=on'><img src='img/bulb-icon-off.png'></a> D49Z48C63</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=21&status=on'><img src='img/bulb-icon-off.png'></a> T23X55T38</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=22&status=off'><img src='img/bulb-icon-on.png'></a> W87U76S22</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=23&status=off'><img src='img/bulb-icon-on.png'></a> R53W46M15</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=24&status=off'><img src='img/bulb-icon-on.png'></a> U09F43Q88</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=25&status=on'><img src='img/bulb-icon-off.png'></a> F15M30O68</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=26&status=off'><img src='img/bulb-icon-on.png'></a> K65W55C92</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=27&status=on'><img src='img/bulb-icon-off.png'></a> L15E31N26</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=28&status=on'><img src='img/bulb-icon-off.png'></a> H40W13L33</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=29&status=off'><img src='img/bulb-icon-on.png'></a> Y71X61C14</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=30&status=on'><img src='img/bulb-icon-off.png'></a> C45N76I65</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=31&status=on'><img src='img/bulb-icon-off.png'></a> S89H44R17</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=32&status=off'><img src='img/bulb-icon-on.png'></a> Y78H53E37</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=33&status=on'><img src='img/bulb-icon-off.png'></a> C98Z28O30</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=34&status=off'><img src='img/bulb-icon-on.png'></a> B69D78P78</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=35&status=off'><img src='img/bulb-icon-on.png'></a> F51L43G15</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=36&status=on'><img src='img/bulb-icon-off.png'></a> N59O84D22</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=37&status=on'><img src='img/bulb-icon-off.png'></a> Q58L92E70</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=38&status=off'><img src='img/bulb-icon-on.png'></a> X14X27R68</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=39&status=on'><img src='img/bulb-icon-off.png'></a> L06C76A46</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=40&status=off'><img src='img/bulb-icon-on.png'></a> D41C21E36</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=41&status=on'><img src='img/bulb-icon-off.png'></a> M44J37G72</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=42&status=off'><img src='img/bulb-icon-on.png'></a> E32R18F45</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=43&status=off'><img src='img/bulb-icon-on.png'></a> W39J76H15</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=44&status=on'><img src='img/bulb-icon-off.png'></a> W35J14L18</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=45&status=off'><img src='img/bulb-icon-on.png'></a> K30F37V89</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=46&status=off'><img src='img/bulb-icon-on.png'></a> U24W71N54</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=47&status=off'><img src='img/bulb-icon-on.png'></a> D22C68V46</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=48&status=off'><img src='img/bulb-icon-on.png'></a> T67R58E62</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=49&status=on'><img src='img/bulb-icon-off.png'></a> I62V16P56</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=50&status=off'><img src='img/bulb-icon-on.png'></a> R50T13E22</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=51&status=off'><img src='img/bulb-icon-on.png'></a> D73P95E68</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=52&status=off'><img src='img/bulb-icon-on.png'></a> P89L45V43</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=53&status=off'><img src='img/bulb-icon-on.png'></a> H23Q34H18</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=54&status=off'><img src='img/bulb-icon-on.png'></a> E85Y64S57</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=55&status=off'><img src='img/bulb-icon-on.png'></a> I86F93L22</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=56&status=on'><img src='img/bulb-icon-off.png'></a> P43Q77W36</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=57&status=on'><img src='img/bulb-icon-off.png'></a> W17Z26R84</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=58&status=off'><img src='img/bulb-icon-on.png'></a> S67J97L45</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=59&status=on'><img src='img/bulb-icon-off.png'></a> J52B53T05</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=60&status=on'><img src='img/bulb-icon-off.png'></a> K46D75N47</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=61&status=on'><img src='img/bulb-icon-off.png'></a> W21P20T93</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=62&status=off'><img src='img/bulb-icon-on.png'></a> D98S25V61</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=63&status=off'><img src='img/bulb-icon-on.png'></a> R97H14G10</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=64&status=on'><img src='img/bulb-icon-off.png'></a> N26X66U73</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=65&status=on'><img src='img/bulb-icon-off.png'></a> M25T36L31</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=66&status=off'><img src='img/bulb-icon-on.png'></a> K17N17Z15</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=67&status=off'><img src='img/bulb-icon-on.png'></a> P83P83F54</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=68&status=off'><img src='img/bulb-icon-on.png'></a> M30O84E34</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=69&status=off'><img src='img/bulb-icon-on.png'></a> M11W70R71</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=70&status=on'><img src='img/bulb-icon-off.png'></a> I63T22X52</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=71&status=on'><img src='img/bulb-icon-off.png'></a> D28R85X15</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=72&status=on'><img src='img/bulb-icon-off.png'></a> G71H97W58</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=73&status=on'><img src='img/bulb-icon-off.png'></a> E67N18T23</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=74&status=on'><img src='img/bulb-icon-off.png'></a> C59O80R48</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=75&status=off'><img src='img/bulb-icon-on.png'></a> Q86P88O81</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=76&status=on'><img src='img/bulb-icon-off.png'></a> P85P56T04</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=77&status=on'><img src='img/bulb-icon-off.png'></a> C59K65B51</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=78&status=off'><img src='img/bulb-icon-on.png'></a> G32P27K81</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=79&status=on'><img src='img/bulb-icon-off.png'></a> N25Q09F99</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=80&status=off'><img src='img/bulb-icon-on.png'></a> I86M53F77</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=81&status=on'><img src='img/bulb-icon-off.png'></a> I69Y72V84</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=82&status=on'><img src='img/bulb-icon-off.png'></a> Y88O85I87</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=83&status=off'><img src='img/bulb-icon-on.png'></a> Q84R56R68</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=84&status=on'><img src='img/bulb-icon-off.png'></a> S54Y23C84</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=85&status=on'><img src='img/bulb-icon-off.png'></a> G48D27X13</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=86&status=on'><img src='img/bulb-icon-off.png'></a> W29O39O91</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=87&status=off'><img src='img/bulb-icon-on.png'></a> U73Z40J94</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=88&status=off'><img src='img/bulb-icon-on.png'></a> Z44V78M68</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=89&status=on'><img src='img/bulb-icon-off.png'></a> Y23F66W12</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=90&status=on'><img src='img/bulb-icon-off.png'></a> P24C32T80</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=91&status=on'><img src='img/bulb-icon-off.png'></a> D18W71Y41</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=92&status=on'><img src='img/bulb-icon-off.png'></a> K36E52H17</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=93&status=on'><img src='img/bulb-icon-off.png'></a> E31T32I12</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=94&status=off'><img src='img/bulb-icon-on.png'></a> X61O72H47</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=95&status=off'><img src='img/bulb-icon-on.png'></a> O88J72Y38</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=96&status=on'><img src='img/bulb-icon-off.png'></a> X37C38V33</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=97&status=off'><img src='img/bulb-icon-on.png'></a> C56K26Q31</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=98&status=on'><img src='img/bulb-icon-off.png'></a> P76Q71Y56</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=99&status=off'><img src='img/bulb-icon-on.png'></a> R25C10G80</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=100&status=off'><img src='img/bulb-icon-on.png'></a> D01A68V94</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=101&status=on'><img src='img/bulb-icon-off.png'></a> A19W15L90</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=102&status=on'><img src='img/bulb-icon-off.png'></a> R81I08O56</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=103&status=off'><img src='img/bulb-icon-on.png'></a> O74M96W28</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=104&status=on'><img src='img/bulb-icon-off.png'></a> K65V26W33</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=105&status=off'><img src='img/bulb-icon-on.png'></a> U64W16H13</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=106&status=off'><img src='img/bulb-icon-on.png'></a> H43P76J40</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=107&status=off'><img src='img/bulb-icon-on.png'></a> O85J51O52</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=108&status=off'><img src='img/bulb-icon-on.png'></a> F53L25G46</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=109&status=off'><img src='img/bulb-icon-on.png'></a> P52O57F82</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=110&status=on'><img src='img/bulb-icon-off.png'></a> N22W34Y26</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=111&status=off'><img src='img/bulb-icon-on.png'></a> B89A81M55</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=112&status=off'><img src='img/bulb-icon-on.png'></a> X86C31E62</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=113&status=on'><img src='img/bulb-icon-off.png'></a> P85R25X93</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=114&status=on'><img src='img/bulb-icon-off.png'></a> K18A54J05</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=115&status=off'><img src='img/bulb-icon-on.png'></a> Y12K75O92</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=116&status=off'><img src='img/bulb-icon-on.png'></a> D07B58V27</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=117&status=on'><img src='img/bulb-icon-off.png'></a> M51M79V51</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=118&status=on'><img src='img/bulb-icon-off.png'></a> J11L38F35</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=119&status=off'><img src='img/bulb-icon-on.png'></a> B24X69U16</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=120&status=off'><img src='img/bulb-icon-on.png'></a> W35C43S74</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=121&status=on'><img src='img/bulb-icon-off.png'></a> Q13O98Y36</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=122&status=on'><img src='img/bulb-icon-off.png'></a> R38P78G15</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=123&status=on'><img src='img/bulb-icon-off.png'></a> M75S18M15</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=124&status=off'><img src='img/bulb-icon-on.png'></a> Y12O40S"071"</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=125&status=off'><img src='img/bulb-icon-on.png'></a> J25J69W25</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=126&status=on'><img src='img/bulb-icon-off.png'></a> C23C48X81</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=127&status=on'><img src='img/bulb-icon-off.png'></a> Y21J11F99</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=128&status=off'><img src='img/bulb-icon-on.png'></a> Y58V17N84</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=129&status=off'><img src='img/bulb-icon-on.png'></a> M80D33G60</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=130&status=on'><img src='img/bulb-icon-off.png'></a> I45I83Q86</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=131&status=on'><img src='img/bulb-icon-off.png'></a> M35I27C54</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=132&status=off'><img src='img/bulb-icon-on.png'></a> R24G76R59</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=133&status=on'><img src='img/bulb-icon-off.png'></a> O19P15W36</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=134&status=off'><img src='img/bulb-icon-on.png'></a> I45R73B68</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=135&status=on'><img src='img/bulb-icon-off.png'></a> A07D87F74</h4>
            <h1>600 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=136&status=off'><img src='img/bulb-icon-on.png'></a> X26O65A09</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=137&status=off'><img src='img/bulb-icon-on.png'></a> T44N70D87</h4>
            <h1>500 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=138&status=on'><img src='img/bulb-icon-off.png'></a> E96U41V32</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=139&status=off'><img src='img/bulb-icon-on.png'></a> D74V79G31</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=140&status=off'><img src='img/bulb-icon-on.png'></a> G15X14I26</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=141&status=on'><img src='img/bulb-icon-off.png'></a> B29U37H26</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=142&status=off'><img src='img/bulb-icon-on.png'></a> I67L08E74</h4>
            <h1>400 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=143&status=off'><img src='img/bulb-icon-on.png'></a> E25S53C53</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=144&status=off'><img src='img/bulb-icon-on.png'></a> N81F03H00</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=145&status=on'><img src='img/bulb-icon-off.png'></a> F82D34T08</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=146&status=off'><img src='img/bulb-icon-on.png'></a> L96I87F14</h4>
            <h1>400 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=147&status=off'><img src='img/bulb-icon-on.png'></a> H98K91W68</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=148&status=on'><img src='img/bulb-icon-off.png'></a> O71N61D56</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=149&status=off'><img src='img/bulb-icon-on.png'></a> W71P28C75</h4>
            <h1>500 W.</h1>
            <h4>Grada Este</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=150&status=off'><img src='img/bulb-icon-on.png'></a> C08J35U30</h4>
            <h1>500 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=151&status=off'><img src='img/bulb-icon-on.png'></a> V85P77S69</h4>
            <h1>600 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=152&status=off'><img src='img/bulb-icon-on.png'></a> S71V75N94</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=153&status=on'><img src='img/bulb-icon-off.png'></a> S44A34A53</h4>
            <h1>600 W.</h1>
            <h4>Fondo Norte</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=154&status=off'><img src='img/bulb-icon-on.png'></a> E23T41C83</h4>
            <h1>400 W.</h1>
            <h4>Grada Oeste</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=155&status=off'><img src='img/bulb-icon-on.png'></a> D67T64B65</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=156&status=off'><img src='img/bulb-icon-on.png'></a> G51F55R12</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=157&status=on'><img src='img/bulb-icon-off.png'></a> R18B57S14</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=158&status=on'><img src='img/bulb-icon-off.png'></a> B12X76J62</h4>
            <h1>500 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element on'>
            <h4><a href='changestatus.php?id=159&status=off'><img src='img/bulb-icon-on.png'></a> B89C47M27</h4>
            <h1>600 W.</h1>
            <h4>Fondo Sur</h4>
        </div>
        <div class='element off'>
            <h4><a href='changestatus.php?id=160&status=on'><img src='img/bulb-icon-off.png'></a> N69M85M36</h4>
            <h1>400 W.</h1>
            <h4>Grada Este</h4>
        </div>
    </div>
</body>

</html>