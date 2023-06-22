const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      })

      $(document).ready(function() {
        $('.loader').fadeIn(500);
        $('.loader').delay(2000).queue(function() {
          $(this).delay(500).queue(function() {
            $(this).delay(1000).queue(function() {
              $(this).delay(500).queue(function() {
                $(this).delay(500).queue(function() {
                  $(this).delay(500).queue(function() {
                    $(this).delay(500).queue(function() {
                      $(this).delay(500).queue(function() {
                        $(this).fadeOut(500);
                      });
                    });
                  });
                });
              });
            });
          });
        });
      });