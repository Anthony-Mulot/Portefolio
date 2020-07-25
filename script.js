$('a[href^=#]').on("click", function () {
    var t = $(this.hash);
    var t = t.length && t || $('[name=' + this.hash.slice(1) + ']');
    if (t.length) {
        var tOffset = t.offset().top;
        $('html,body').animate({ scrollTop: tOffset - 20 }, 'slow');
        return false;
    }
});

document.forms[0].addEventListener("submit", function(evenement) { 
    if (document.getElementById("email").value == "") {
        evenement.preventDefault();
        alert("Tapez un email valable pour avoir une réponse.");
        document.getElementById("email").focus();
    }
    else if (document.getElementById("message").value == "") {
        evenement.preventDefault();
        alert("Pensez à taper un message !");
        document.getElementById("message").focus();
    }
});

document.getElementById("hamburger").addEventListener("click", function() {
    this.classList.toggle("active");
    document.querySelector(".mobile-menu").classList.toggle("active");
});

$('a[href^=#]').on("click", function() {
    var t = $(this.hash);
    var t = t.length && t || $('[name=' + this.hash.slice(1) + ']');
    if (t.length) {
        var tOffset = t.offset().top;
        $('html,body').animate({
            scrollTop: tOffset - 20
        }, 'slow');
        return false;
    }
});

var start = document.getElementsByName('submit');

        function submit() {
            if (document.getElementById('name').value == "") {
                alert("Veuillez entrer votre peeerénom!");
                return false;
            }


            if (document.getElementById('email').value == "") {
                alert("Veuillez entrer votre e-mail !");
                return false;
            }

            
        }

        start[0].addEventListener('click', submit, false);

         self.moveTo(0,0);
         self.resizeTo(screen.availWidth,screen.availHeight);