
<script>
  const phoneMask = ['(99) 9999-99999', '(99) 99999-9999']
  const phones = document.querySelectorAll('.phone-mask')
  const inputHandler = (masks, max, event) => {
    const c = event.target;
    const v = c.value.replace(/\D/g, '');
    const m = c.value.length > max ? 1 : 0;
    VMasker(c).unMask();
    VMasker(c).maskPattern(masks[m]);
    c.value = VMasker.toPattern(v, masks[m]);
  }
  if (phones) {
    phones.forEach(tel => {
      VMasker(tel).maskPattern(phoneMask[0]);
      tel.addEventListener('input', inputHandler.bind(undefined, phoneMask, 14), false);
    })
  }

</script>

<script>

  grecaptcha.ready(function() {
    grecaptcha.execute('6LcuHxEjAAAAAEpI8H0-uPvyIVUKPS9ek9kSxHCc', {action: 'submit'}).then(function(token) {
      
      var tokens = document.getElementsByClassName("token");

      for (var i = 0; i < tokens.length; i++) {
        tokens[i].value = token;
      }
    });
  });
  
</script>
<!-- verifica se existe submit -->
 <?php 
    if(isset($_POST['Formulário'])){
      enviaDados();
    }

  ?>  


