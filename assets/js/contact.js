

function sendMail(){
    var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message:document.getElementById('message').value,
    };

    console.log(params);
    alert(params.email);

    const serviceID = "service_cd44nmc";
    const templateID = "template_jmdo6on";

    emailjs
    .send(serviceID,templateID,params,'fYjoUcDZoKkgP3oNn')
    .then(
    res=>{  
    document.getElementById('name').value= "";
    document.getElementById('email').value= "";
    document.getElementById('message').value= "";
    console.log(res);
    alert("Votre message à été  envoyé avec succes");
    }
    ).catch((err)=> console.log(err));
    }