document.addEventListener('DOMContentLoaded', function () {
    // General variables
    var webroot             = document.getElementById('webroot').value;
    var btnNextRiasec       = document.getElementById('btnNextRiasec');
    // Get questions, personalities and preferences
    var xmlhttp             = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            localStorage.setItem('riasec', xmlhttp.responseText);
        }
    }

    xmlhttp.open('GET', webroot + 'questions');

    xmlhttp.send();
    // Test variables
    var questions           = JSON.parse(localStorage.getItem('riasec'))[0];
    var preferences         = JSON.parse(localStorage.getItem('riasec'))[1];
    var personalities       = JSON.parse(localStorage.getItem('riasec'))[2];

    var TestRIASEC          = new Array;
    var aux                 = 1;

    for (var i = 0; i < preferences.length; i++) {
        TestRIASEC[i] = preferences[i];
        var personalitiesForPreferences = new Array;
        for (var j = 0; j < personalities.length; j++) {
            if (personalities[j].preferencia == TestRIASEC[i].cv_preferencia) {
                var questionsForPersonalities = new Array;
                for (var k = 0; k < questions.length; k++) {
                    if (personalities[j].cv_personalidad == questions[k].personalidad) {
                        questionsForPersonalities[k] = questions[k];
                    }
                }
                personalities[j]['questions'] = questionsForPersonalities;
                personalitiesForPreferences[aux] = personalities[j];
                aux++;
            }
        }
        TestRIASEC[i]['personalities'] = personalitiesForPreferences;
    }
    
    console.log(TestRIASEC);
});