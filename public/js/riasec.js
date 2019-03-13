document.addEventListener("DOMContentLoaded", function () {
    // General variables of Materialize
    var metas = document.getElementsByTagName('meta');
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
    var modalAlert1 = document.getElementById('divAlert1');
    var modalAlert1 = M.Modal.getInstance(modalAlert1);
    // General variables
    var webroot = document.getElementById("webroot").value;
    var btnNextRiasec = document.getElementById("buttonNextRiasec");
    var progressBar = document.getElementById("divProgress");
    var tableQuestions = document.getElementById("tbodyQuestions");
    var tittlePreference = document.getElementById("h5Preference");
    var instructions = document.getElementById("pInstructions");
    var classAnswer = new Array();
    var spanPreference = document.getElementById('spanPreference');
    var tableTest = document.getElementById('tableTest');
    var videoTest = document.getElementById('vd1m2');
    var buttonExitRiasec = document.getElementById('buttonExitRiasec');
    var tableFinishTest = document.getElementById('tableFinishTest');
    // Get questions, personalities and preferences
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            localStorage.setItem("riasec", xmlhttp.responseText);
        }
    };

    xmlhttp.open("GET", webroot + "questions");

    xmlhttp.send();

    // Test variables
    var questions = JSON.parse(localStorage.getItem("riasec"))[0];
    var preferences = JSON.parse(localStorage.getItem("riasec"))[1];
    var personalities = JSON.parse(localStorage.getItem("riasec"))[2];

    var TestRIASEC = new Array();
    var aux = 1;
    // Build test riasec
    for (var i = 0; i < preferences.length; i++) {
        TestRIASEC[i] = preferences[i];
        var personalitiesForPreferences = new Array();
        for (var j = 0; j < personalities.length; j++) {
            if (personalities[j].preferencia == TestRIASEC[i].cv_preferencia) {
                var questionsForPersonalities = new Array();
                var indexQuestion = 0;
                for (var k = 0; k < questions.length; k++) {
                    if (
                        personalities[j].cv_personalidad ==
                        questions[k].personalidad
                    ) {
                        questionsForPersonalities[indexQuestion] =
                            questions[k].pregunta;
                        indexQuestion++;
                    }
                }
                personalities[j]["questions"] = questionsForPersonalities;
                personalitiesForPreferences[aux] = personalities[j];
                aux++;
            }
        }
        TestRIASEC[i]["personalities"] = personalitiesForPreferences;
    }

    // Get advances of user
    var xhttpr = new XMLHttpRequest();

    xhttpr.onreadystatechange = function () {
        if (xhttpr.readyState == 4) {
            localStorage.setItem("advances", xhttpr.responseText);
        }
    };

    xhttpr.open('GET', webroot + 'inicioExamen');

    xhttpr.send();


    var position = JSON.parse(localStorage.getItem('advances')).Avance;

    var advances = {
        R: JSON.parse(localStorage.getItem('advances')).R,
        I: JSON.parse(localStorage.getItem('advances')).I,
        A: JSON.parse(localStorage.getItem('advances')).A,
        S: JSON.parse(localStorage.getItem('advances')).S,
        E: JSON.parse(localStorage.getItem('advances')).E,
        C: JSON.parse(localStorage.getItem('advances')).C
    };
    // Load advences
    uploadQuestions(position);
    // Event for button next section of test riasec
    btnNextRiasec.addEventListener("click", function () {
        if (position <= 18) {
            var request = counterAnswer(classAnswer);
            if (request[0] == classAnswer.length) {
                if (position < 21) {
                    overrideAdvances(position, request[1]);
                    position++;
                    uploadQuestions(position);
                }
            } else {
                for (var i = 0; i < TestRIASEC.length; i++) {
                    if (typeof TestRIASEC[i].personalities[position] === "undefined") {
                        continue;
                    } else {
                        spanPreference.innerText = TestRIASEC[i].descripcion.toLowerCase();
                        break;
                    }
                }
                modalAlert1.open();
                setTimeout(function () {
                    modalAlert1.close();
                }, 7000);
            }
        } else {
            var graph = document.getElementsByClassName('inputGraph');
            if (counterAnswer(graph)) {
                position++;
                uploadQuestions(position);
            } else {
                for (var i = 0; i < TestRIASEC.length; i++) {
                    if (typeof TestRIASEC[i].personalities[position] === "undefined") {
                        continue;
                    } else {
                        spanPreference.innerText = TestRIASEC[i].descripcion.toLowerCase();
                        break;
                    }
                }
                modalAlert1.open();
                setTimeout(function () {
                    modalAlert1.close();
                }, 7000);
            }
        }
        updateDataBase();
    });

    buttonExitRiasec.addEventListener('click', function () {
        window.location.href = webroot;
    });
    // Load questions
    function uploadQuestions(pPosition) {
        tableQuestions.innerHTML = ``;
        progressBar.attributes[2].value = "width: " + (pPosition * 100) / 21 + "%";
        progressBar.innerText = Math.round((pPosition * 100) / 21) + "%";
        if (pPosition == 0) {
            tableTest.classList.add('d-none');
            tableFinishTest.classList.add('d-none');
            videoTest.classList.remove('d-none');
        } else if (pPosition <= 18) {
            tableTest.classList.remove('d-none');
            videoTest.classList.add('d-none');
            tableFinishTest.classList.add('d-none');
            classAnswer = new Array();
            for (var i = 0; i < TestRIASEC.length; i++) {
                if (typeof TestRIASEC[i].personalities[pPosition] === "undefined") {
                    continue;
                } else {
                    tittlePreference.innerText = TestRIASEC[i].descripcion;
                    instructions.innerText = TestRIASEC[i].texto;
                    for (
                        var j = 0; j < TestRIASEC[i].personalities[pPosition].questions.length; j++
                    ) {
                        const element =
                            TestRIASEC[i].personalities[pPosition].questions[j];
                        var tr = document.createElement("tr");
                        // Questions
                        var td1 = document.createElement("td");
                        var td1Txt = document.createTextNode(element);
                        var td1Class = document.createAttribute("class");
                        td1Class.value = "col-9 animated bounce";
                        td1.appendChild(td1Txt);
                        td1.setAttributeNode(td1Class);
                        // Answer
                        var td2 = document.createElement("td");
                        var td2Class = document.createAttribute("class");
                        td2Class.value = "col-3 animated bounce";
                        td2.setAttributeNode(td2Class);
                        var div1 = document.createElement("div");
                        var div1Class = document.createAttribute("class");
                        div1Class.value = "row text-center p-0 m-0";
                        div1.setAttributeNode(div1Class);
                        // Answer Yes
                        var p1 = document.createElement("p");
                        var p1Class = document.createAttribute("class");
                        p1Class.value = "col-6 p-0 m-0";
                        p1.setAttributeNode(p1Class);
                        // Answer No
                        var p2 = document.createElement("p");
                        var p2Class = document.createAttribute("class");
                        p2Class.value = "col-6 p-0 m-0";
                        p2.setAttributeNode(p2Class);
                        var label1 = document.createElement("label");
                        p1.appendChild(label1);
                        var label2 = document.createElement("label");
                        p2.appendChild(label2);
                        // Yes
                        var input1 = document.createElement("input");
                        var input1Class = document.createAttribute("class");
                        input1Class.value = "with-gap answer";
                        var input1Name = document.createAttribute("name");
                        input1Name.value = "question" + j;
                        var input1Type = document.createAttribute("type");
                        input1Type.value = "radio";
                        var input1Value = document.createAttribute("value");
                        input1Value.value = "1";
                        input1.setAttributeNode(input1Class);
                        input1.setAttributeNode(input1Name);
                        input1.setAttributeNode(input1Type);
                        input1.setAttributeNode(input1Value);
                        var span1 = document.createElement("span");
                        var span1Class = document.createAttribute("class");
                        span1Class.value = "ml-2";
                        span1.setAttributeNode(span1Class);

                        label1.appendChild(input1);
                        label1.appendChild(span1);
                        // No
                        var input2 = document.createElement("input");
                        var input2Class = document.createAttribute("class");
                        input2Class.value = "with-gap answer";
                        var input2Name = document.createAttribute("name");
                        input2Name.value = "question" + j;
                        var input2Type = document.createAttribute("type");
                        input2Type.value = "radio";
                        var input2Value = document.createAttribute("value");
                        input2Value.value = "0";
                        input2.setAttributeNode(input2Class);
                        input2.setAttributeNode(input2Name);
                        input2.setAttributeNode(input2Type);
                        input2.setAttributeNode(input2Value);
                        var span2 = document.createElement("span");
                        var span2Class = document.createAttribute("class");
                        span2Class.value = "ml-2";
                        span2.setAttributeNode(span2Class);

                        label2.appendChild(input2);
                        label2.appendChild(span2);

                        div1.appendChild(p1);
                        div1.appendChild(p2);
                        td2.appendChild(div1);
                        // Add questions and answer
                        tr.appendChild(td1);
                        tr.appendChild(td2);
                        tableQuestions.appendChild(tr);

                        classAnswer.push("question" + j);
                    }
                    break;
                }
            }
        } else {
            tittlePreference.innerText = TestRIASEC[3].descripcion;
            instructions.innerText = TestRIASEC[3].texto;
            tableTest.classList.add('d-none');
            videoTest.classList.add('d-none');
            tableFinishTest.classList.remove('d-none');
            var column1 = document.getElementById('R');
            var column2 = document.getElementById('I');
            var column3 = document.getElementById('A');
            var column4 = document.getElementById('S');
            var column5 = document.getElementById('E');
            var column6 = document.getElementById('C');
            var graph = document.getElementsByClassName('inputGraph');

            for (var i = 0; i < graph.length; i++) {
                const element = graph[i];
                element.checked = false;
            }

            if (pPosition == 19) {
                column1.innerText = TestRIASEC[3].personalities[19].questions[0];
                column2.innerText = TestRIASEC[3].personalities[20].questions[0];
                column3.innerText = TestRIASEC[3].personalities[21].questions[0];
                column4.innerText = TestRIASEC[3].personalities[22].questions[0];
                column5.innerText = TestRIASEC[3].personalities[23].questions[0];
                column6.innerText = TestRIASEC[3].personalities[24].questions[0];
            } else if (pPosition == 20) {
                column1.innerText = TestRIASEC[3].personalities[19].questions[1];
                column2.innerText = TestRIASEC[3].personalities[20].questions[1];
                column3.innerText = TestRIASEC[3].personalities[21].questions[1];
                column4.innerText = TestRIASEC[3].personalities[22].questions[1];
                column5.innerText = TestRIASEC[3].personalities[23].questions[1];
                column6.innerText = TestRIASEC[3].personalities[24].questions[1];
            }
        }
    }

    function counterAnswer(classAnswer) {
        if (position <= 18) {
            var counter = 0;
            var answers = 0;
            for (var i = 0; i < classAnswer.length; i++) {
                const elements = document.getElementsByName(classAnswer[i]);
                if (elements[0].checked) {
                    answers++;
                }
                for (var j = 0; j < elements.length; j++) {
                    const element = elements[j];
                    if (element.checked) {
                        counter++;
                    }
                }
            }
            var request = [counter, answers];
            return request;
        } else {
            var counter = 0;
            for (var i = 0; i < classAnswer.length; i++) {
                const element = classAnswer[i];
                if (element.checked) {
                    var personalitie = element.attributes[2].value;
                    var points = element.value;
                    switch (personalitie) {
                        case 'R':
                            advances.R += parseInt(points);
                            break;
                        case 'I':
                            advances.I += parseInt(points);
                            break;
                        case 'A':
                            advances.A += parseInt(points);
                            break;
                        case 'S':
                            advances.S += parseInt(points);
                            break;
                        case 'E':
                            advances.E += parseInt(points);
                            break;
                        case 'C':
                            advances.C += parseInt(points);
                            break;
                        default:
                            break;
                    }
                    counter++;
                }
            }

            if (counter == 6) {
                return true;
            } else {
                return false;
            }
        }
    }

    function overrideAdvances(pPosition, pAdvance) {
        for (var i = 0; i < TestRIASEC.length; i++) {
            if (typeof TestRIASEC[i].personalities[pPosition] === "undefined") {
                continue;
            } else {
                const element = TestRIASEC[i].personalities[pPosition].clave;
                switch (element) {
                    case 'R':
                        advances.R += pAdvance;
                        break;
                    case 'I':
                        advances.I += pAdvance;
                        break;
                    case 'A':
                        advances.A += pAdvance;
                        break;
                    case 'S':
                        advances.S += pAdvance;
                        break;
                    case 'E':
                        advances.E += pAdvance;
                        break;
                    case 'C':
                        advances.C += pAdvance;
                        break;
                    default:
                        break;
                }
                break;
            }
        }
    }

    function updateDataBase() {
        var csrf = metas[3].attributes[1].value;
        var riasec = JSON.stringify(advances);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4) {
                var error = JSON.parse(xhttp.responseText);
                if (error.Error == '') {
                    M.toast({
                        html: 'Avances guardados correctamente'
                    })
                } else {

                }
            }
        }
        xhttp.open('GET', webroot + 'avanceExamen/' + encodeURI(riasec) + "/" + encodeURI(position));
        try {
            xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.setRequestHeader("X-CSRF-TOKEN", csrf);
        } catch (e) {
            console.log(e);
        }
        xhttp.send();

        console.log(position);
        console.log(advances);
    }
    // VIDEO CODE
    var player = videojs('vd1m2', {
        fluid: true
    });
});
