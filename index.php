<?php
function get_data($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$data = get_data("https://www.facebook.com/ads/lead_gen/export_csv/?id=235918054851126");
$result = json_decode($data);
?>
<html>
<?php
//$ch = curl_init("https://www.facebook.com/ads/lead_gen/export_csv/?id=235918054851126");
//$url = "https://www.facebook.com/ads/lead_gen/export_csv/?id=235918054851126";
//$fp = fopen("example_homepage.txt", "w");

//curl_setopt($ch, CURLOPT_FILE, $fp);
//curl_setopt($ch, CURLOPT_HEADER, 0);

//$xx = curl_exec($ch);
//if(curl_error($ch)) {
//fwrite($fp, curl_error($ch));
//}
//var_dump($xx);
//curl_close($ch);
//fclose($fp);
?>

<body>
    <?php var_dump($result); ?>
    <div>xxxxxxxxxxxxxxxxx</div>
</body>

</html>
<?php 
/*
curl -i -X GET "https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=1166944764162630&client_secret=de21aa1cb9f26c8569f66dea3bbea90b&fb_exchange_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej"


curl -X GET -G -d 'https://graph.facebook.com/me/accounts/access_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej'


curl -X GET -g -d "https://graph.facebook.com/me/accounts/access_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej"

curl -X GET -G -d "access_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej" https://graph.facebook.com/me/accounts




curl -X POST -F 'subscribed_fields = {publisher_subscriptions}' -F 'access_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej' https://graph.facebook.com/276762552522484/subscribed_apps





curl -X POST -F 'access_token=EAAQlVIAj8kYBAJOQUuYB9oQzVn9cMD0bOkGczPQ41LqNzq6kXq6VyOznaltYL3gKwbKYyV1Cy6zZCb4gmgfESehnpaXcf6ao1poK5uYUzMvuhoglc1HGROFCtJHyNVC1CjwWL7t3oIsnQa2sUYr1ojVjZC2Qkd6qA1pl4ZBxVL4Nktnbaej' -F 'subscribed_fields="leadgen"' https://graph.facebook.com/276762552522484/subscribed_apps

curl -X GET /v10.0/276762552522484/subscribed_apps HTTP/1.1

curl -X POST -F 'access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD' -F 'subscribed_fields="leadgen"' https: //graph.facebook.com/1energierenouvelable/subscribed_apps


https://graph.facebook.com/1energierenouvelable/subscribed_apps/access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD&subscribed_fields="leadgen

curl -X GET https://graph.facebook.com/v2.9/LADbible/posts?access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD
try {


 Returns a `Facebook\FacebookResponse` object
$response = $fb->post(
'/276762552522484/subscribed_apps',
array(
'subscribed_fields' => 'leadgen',
),
'{EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD}'
);
} catch (Facebook\Exceptions\FacebookResponseException $e) {
echo 'Graph returned an error: ' . $e->getMessage();
exit;
} catch (Facebook\Exceptions\FacebookSDKException $e) {
echo 'Facebook SDK returned an error: ' . $e->getMessage();
exit;
}
$graphNode = $response->getGraphNode();


curl -i -X POST "https://graph.facebook.com/276762552522484/subscribed_apps?subscribed_fields=leadgen&access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD"

curl -X POST -F 'access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD' -F 'subscribed_fields="leadgen"' https://graph.facebook.com/276762552522484/subscribed_apps

curl -i -X GET "https://graph.facebook.com/276762552522484/subscribed_apps?access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD"




curl -i -X GET -F "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" -F 'subscribed_fields="leadgen"' https: //graph.facebook.com/276762552522484/subscribed_apps?



curl -i -X GET "https://graph.facebook.com/v10.0/276762552522484/locations?fields=location%7Blatitude%2Clongitude%7D%2Cis_permanently_closed&limit=30000access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD"


curl -d "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com//v10.0/276762552522484/test_leads"
curl -d "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com//v10.0/276762552522484/"

curl -d "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com//v10.0/320327614680247/"

    curl -d "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com//v10.0/320327614680247/"


curl -F "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com/v10.0/235918054851126/test_leads"

curl -d "access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD" "https://graph.facebook.com//v10.0/235918054851126/test_leads"
curl -i -X GET "https://graph.facebook.com//v10.0//test_leads?&access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD"

curl -X GET -d 'access_token=EAAQlVIAj8kYBAOt2UieY6C0G3wBDuggNqflNzBZCAA9rVBPAX5xlydHtx06qHuA9ZBoWrcXeqBiZCBWatHZAgnPHe5Im5Mkjt60xqubpoywbUyBFryHSOABJKMkxhjzFR1Lvs41yLPpJvMtozoXqZCpGd3yq9DJfk4MAspXAiCL7Pnm6PMHvELaNPi7FUTdcZD' https://graph.facebook.com/v10.0/276762552522484/



curl -i -X GET "https://www.facebook.com/ads/lead_gen/export_csv/?id=235918054851126




curl -i -X GET "https://www.facebook.com/ads/lead_gen/export_csv/235918054851126?id=&type=form"

/*id lead test = 285699726368536;
    {"data":
    [
        {   "id":"235918054851126",
            "locale":"en_US",
            "name":"Po\u00eale \u00e0 granul\u00e9s",
            "status":"ACTIVE"
        },
        {
            "id":"444466316592843",
            "locale":"en_US",
            "name":"PAC FRANCECO",
            "status":"ACTIVE"
        },
        {
            "id":"220874322855623",
            "locale":"en_US",
            "name":"photovoltaique2021",
            "status":"ACTIVE"
        },
        {
            "id":"149367470259688",
            "locale":"en_US",
            "name":"photovoltaique",
            "status":"ACTIVE"
        },
        {
            "id":"417883655894561",
            "locale":"en_US",
            "name":"Pompe a chaleur-copy",
            "status":"ACTIVE"
        },
        {
            "id":"373742874038526",
            "locale":"en_US",
            "name":"Pompe a chaleur",
            "status":"ACTIVE"
        },
        {
            "id":"443500723300960",
            "locale":"fr_FR",
            "name":"Chauffage 2",
            "status":"ACTIVE"
        },
        {
            "id":"351635632729280",
            "locale":"fr_FR",
            "name":"Chauffage"
            "status":"ACTIVE"
        },
        {
            "id":"708534613354066",
            "locale":"fr_FR",
            "name":"\u00c9nergie renouvelable - Franc\u00c9co",
            "status":"ACTIVE"
        },{
            "id":"744983512728006",
            "locale":"fr_FR",
            "name":"Aides Economies d'Energies-copy-copy",
            "status":"ACTIVE"
        },
        {
            "id":"634957087433322",
            "locale":"fr_FR",
            "name":"Aides Chauffage-copy-copy",
            "status":"ACTIVE"
        },
        {
            "id":"285954989278520",
            "locale":"fr_FR",
            "name":"Aides Chauffage-copy",
            "status":"ACTIVE"
        },
        {
            "id":"222460682064201",
            "locale":"fr_FR",
            "name":"Aides Economies d'Energies-copy",
            "status":"ACTIVE"},{"id":"557353694945162","locale":"fr_FR","name":"Aides Chauffage","status":"ACTIVE"
            },
            {
                "id":"1120729981633102",
                "locale":"fr_FR",
                "name":"Aides Economies d'Energies",
                "status":"ACTIVE"
            }
        ],
        "paging":
        {
            "cursors":
            {
                "before":"QVFIUmJ6d1B1YkY5T3UzUDFLSDhtWi1BcUk5ZAjdjUkxnNlRMOFhqVWxvVXpWU3BtRmRjNGVzODNMZAXFUN3pKWXNBbkRxMUVHM0tvTVlzRlhPbzd1VEx6RTR3",
                "after":"QVFIUnBDVDFEOTdpYTFRYkVkSllxWTJWUGZAGZAmpYWTNwRXFpSkZAGQTg5ZAUpXQVJSd2FZAbnhKVTA1ZA2RMVzIyNkFQdmEzVUlmc2RDUkNZAWWpfODl0ZADU1ZAHpR"
            }
        }
    }
C:\Users\Nassim>*/