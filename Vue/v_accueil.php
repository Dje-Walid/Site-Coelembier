<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Vue/css/accueil.css">

    <title>Accueil</title>
</head>
<body>
    <div class="page">
        <img class="groupe" src="./Vue/img/Groupe1.jpg"/>

    <!-- METEO -->

        <div class="meteo">
            <div id="m-booked-weather-bl250-3823">
            <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:430px;" id="width3">
            <div class="booked-wzs-250-175_in"> 
                <div class="booked-wzs-250-175-data">
                <div class="booked-wzs-250-175-left-img wrz-18">
                </div> 
                    <div class="booked-wzs-250-175-right">
                        <div class="booked-wzs-day-deck"> 
                            <div class="booked-wzs-day-val"> 
                                <div class="booked-wzs-day-number"><span class="plus">+</span>24</div> 
                                <div class="booked-wzs-day-dergee">
                                    <div class="booked-wzs-day-dergee-val">&deg;</div> 
                                    <div class="booked-wzs-day-dergee-name">C</div> 
                                </div> 
                            </div> 
                            <div class="booked-wzs-day">
                                <div class="booked-wzs-day-d">H: <span class="plus">+</span>26&deg;</div> 
                                <div class="booked-wzs-day-n">L: <span class="plus">+</span>15&deg;</div>
                            </div> 
                        </div>
                        <div class="booked-wzs-250-175-info"> 
                            <div class="booked-wzs-250-175-city smolest-min">Villepinte (Seine-Saint-Denis) </div>
                            <div class="booked-wzs-250-175-date">Mercredi, 02 Juin</div> 
                            <div class="booked-wzs-left"> <span class="booked-wzs-bottom-l">Prévisions sur 7 jours</span> </div>
                        </div> 
                    </div> 
                </div> 
                <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250">    
                    <tr> 
                        <td>Jeu.</td> 
                        <td>Ven.</td> 
                        <td>Sam.</td> 
                        <td>Dim.</td>
                        <td>Lun.</td>
                        <td>Mar.</td> 
                    </tr> 
                    <tr> 
                        <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td>
                        <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> 
                        <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td>
                        <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico">
                        <div class="wrz-sml wrzs-03"></div></td>
                        <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td>
                    </tr>
                    <tr> 
                        <td class="week-day-val"><span class="plus">+</span>27&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>18&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>21&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>23&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>24&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>24&deg;</td>
                    </tr>
                    <tr>
                        <td class="week-day-val"><span class="plus">+</span>16&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>15&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>14&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>11&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>13&deg;</td>
                        <td class="week-day-val"><span class="plus">+</span>13&deg;</td>
                    </tr>
                </table> </a> 
            </div> 
            </div> 
            </div>
            <script type="text/javascript"> 
                var css_file=document.createElement("link");
                var widgetUrl = location.href;
                css_file.setAttribute("rel","stylesheet");
                css_file.setAttribute("type","text/css");
                css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1');
                document.getElementsByTagName("head")[0].appendChild(css_file);
                function setWidgetData_3823(data) { 
                    if(typeof(data) != 'undefined' && data.results.length > 0) 
                        { 
                            for(var i = 0; i < data.results.length; ++i) { 
                                    var objMainBlock = document.getElementById('m-booked-weather-bl250-3823');
                                        if(objMainBlock !== null) 
                                            { 
                                                var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); 
                                                objMainBlock.innerHTML = data.results[i].html_code; 
                                                if(copyBlock !== null) objMainBlock.appendChild(copyBlock); 
                                            } 
                                } 
                        } 
                    else{ 
                            alert('data=undefined||data.results is empty'); 
                        } 
                } 
                var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=31938;type=3;scode=124;ltid=3457;domid=581;anc_id=21206;countday=undefined;cmetric=1;wlangID=3;color=137AE9;wwidth=430;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";
                widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=3823';
                widgetSrc += ';wstrackId=481472396';
                var weatherBookedScript = document.createElement("script");
                weatherBookedScript.setAttribute("type", "text/javascript");
                weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) 
            </script>
        </div>

        <!-- carte -->

        <div class="map">
            <p>Tous les jours à partir de 15h30</p>
            <p class="horaire">Week-ends de championnat : tirage au sort 14h00 / jet du but 14h30</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.3661394223996!2d2.524838416055799!3d48.96555427929818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6144f1e912977%3A0x672e34c451f2e140!2sStade%20Eug%C3%A8ne%20Criqui!5e0!3m2!1sfr!2sfr!4v1622728016377!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></body>
        </div> 
    </div> 
</body>