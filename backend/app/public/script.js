const fetch = require("node-fetch");


function isVowel(ch) {
    ch = ch.toUpperCase();
    return ch == "A" || ch == "E" || ch == "I" || ch == "O" || ch == "U";
  }

function countVowels(str){
    var count = 0;
    for (var i = 0; i < str.length; i++)
      if (isVowel(str[i]))
        ++count;

    return count;
  }

function return_VOWELS_COUNT(data_submit,host){
    url = "http://"+host+"/api/process/"+data_submit.id+"/finished"
    fetch( url,
        {
            method: 'POST',
            body: JSON.stringify(data_submit)
      })
      .then(response => response.json())
      .then(data => {
        console.log(JSON.stringify(data))
      })
}

var myArgs = process.argv.slice(2);
var id = myArgs[0]
var output = countVowels(myArgs[1]);
var host = myArgs[2];

var data = {
    "id" : id,
    "output": output
}

return_VOWELS_COUNT(data,host);