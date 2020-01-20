<template>
  <div id="app">
    <section>
    <onepage/>
    </section>

 <section>
  <form id="pimex-data-form">
    <fieldset>
      <input type="text" id="name" name="name" placeholder="Nombre">
    </fieldset>
    <fieldset>
      <input type="email" id="email" name="email" placeholder="Email">
    </fieldset>
    <fieldset>
      <input type="tel" id="phone" name="phone" placeholder="Teléfono">
    </fieldset>
    <fieldset>
      <input type="text" id="city" placeholder="Ciudad">
    </fieldset>
    <fieldset>
     <input type="text" id="country" placeholder="País">
    </fieldset>
    <fieldset>
     <input type="text" id="company" placeholder="Empresa">
    </fieldset>
    <fieldset>
      <textarea name="message" rows="8" cols="40" placeholder="Mensaje"></textarea>
    </fieldset>
    <fieldset>
      <input type="submit" class="large button" value="Enviar">
    </fieldset>
  </form>
</section>

  </div>
</template>

<script>

$(document).ready(function(){
  $('.pimex-form').on('submit', function(event){
    event.preventDefault();
    var form = $(this);
    Pimex.async({
      name: $("#name").val(),
      email: $("#email").val(),
      phone: $("#phone").val(),
      city: $("#city").val(),
      country: $("#country").val(),
      company: $("#company").val(),
      message: $("#message").val()
      })
     },
     {
        id: '14557',
        token: "2ofzTRwdkLjKZPr3nx4gXeh6H"
     }, function(err, response){
          if (err) return console.log(err)
          console.log(response);
       })
     })

import onepage from './components/onepage'
import formcontact from './components/form'


export default {
  name: 'App',
  components: {
    onepage,
    formcontact
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

#pimex-data-form {
    max-width: 500px;
    width: 100%;
    margin: 0 auto;
    padding: 25px;
}

.message {
  max-width: 500px;
  margin: 0 auto;
  display: none;
}
</style>
