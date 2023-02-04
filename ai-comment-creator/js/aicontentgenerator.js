//Convert HTML to text
function stripHTML(text) {
    var div = document.createElement("div");
    div.innerHTML = text;
    return div.textContent || div.innerText || "";
}

//Generate API Key for AIContentGenerator
jQuery(document).ready(function($){
    $("#generate_apikey").on("click", function() {
      console.log("Button was clicked!");
    });
});
  

       window.addEventListener('load', function () {
        console.log("Start to process");
        $('#loading').hide();
  
       })
      const button = document.querySelector('#generatecontent_button');
      button.addEventListener('click', () => {
        
  
        $('#loading').show();
        //$('#loading').hide();
  
        $.getJSON('https://randomuser.me/api/?nat=' + document.getElementById("select_nation").value, function(data) {
          // JSON result in `data` variable
          console.log(data);
          document.getElementById("comment_fullname").value = data.results[0].name.first + " " + data.results[0].name.last;
          document.getElementById("comment_email").value = data.results[0].email;
          document.getElementById("avatar_url").value = data.results[0].picture.large;
        });
  
  
      
    var postContent = document.getElementById("select_posts").options[document.getElementById("select_posts").selectedIndex].getAttribute("name");
    var aiApiKey = document.getElementById("ai_api_key").value;
    var maxToken = document.getElementById("max_token").value;
    var prompt = document.getElementById("comment_prompt").value;
    var userCurrentCredit = parseInt(document.getElementById("user_current_credit").value);
    var domainName = document.getElementById("domain_name").value;
  
  
    console.log(aiApiKey);
    console.log("postContent: " + postContent);
  
    if(userCurrentCredit < maxToken){
      //Use OpenAI API

      let final_prompt = prompt + ' " ' + postContent + ' " ';
      let url = 'https://aicontentgenerator.app/api/generateCommentOpenAI';

let data = {
    aicommentcreator_apikey: domainName,
    openai_apikey: aiApiKey,
    maxToken: maxToken,
    prompt: final_prompt
};

$.ajax({
  type: 'POST',
  url: url,
  data: JSON.stringify(data),
  contentType: 'application/json',
  success: function(result) {
    let text = result.choices[0].text;
    console.log("OPENAI: " + text);
    // process the data here
    
    document.getElementById("comment_content").value = text.trim();
    $('#loading').hide();
  },
  error: function(error) {
    console.error('There was a problem with the fetch operation: ', error);
    window.alert(error.responseJSON.error);
  }
});



      
  
    }else{
      //Use AIContentGenerator API

      let final_prompt = prompt + ' " ' + postContent + ' " ';
      let url = 'https://www.aicontentgenerator.app/api/generateCommentJS';
      
      let data = {
          userDomain: domainName,
          maxToken: maxToken,
          prompt: final_prompt
      };
      
      $.ajax({
        type: 'POST',
        url: url,
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: function(result) {
          let text = result.choices[0].text;
          console.log("AICONTENTGENERATOR: " + text);
          console.log(result);
          // process the data here
          
          document.getElementById("comment_content").value = text.trim();
          $('#loading').hide();
        },
        error: function(error) {
          console.error('There was a problem with the fetch operation: ', error);
          window.alert(error.responseJSON.error);
        }
      });
  /*
     var finalPrompt = prompt  + " ' " + postContent + " ' ";
     var finalUrl = "https://www.aicontentgenerator.app/api/generateCommentJS?userDomain=" + domainName + "&maxToken=" + maxToken + "&prompt=" + finalPrompt;
     finalUrl = stripHTML(finalUrl);
     console.log(finalUrl);
  
  
  
  var settings = {
    url: finalUrl,
    method: "POST",
    timeout: 0,
    headers: {
      'Content-Type': 'application/json'
    },
    dataType: 'json'
  };
  
  $.ajax(settings).done(function (data) {
    console.log(data);
    console.log(data);
    console.log("AICONTENTGENERATORrrr111 : " + data.choices[0].text);
      document.getElementById("comment_content").value = data.choices[0].text.trim();
      $('#loading').hide();
  });
  
  
  */
      
     
    }
  
    
  
  
  
  });
  