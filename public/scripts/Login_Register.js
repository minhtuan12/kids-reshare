const imgBtn = document.querySelector('.img-btn');
imgBtn.addEventListener("click", function() {
    document.querySelector(".cont").classList.toggle("s-signup");
})

function validator(object) {
    function validate(inputElement, rule, errorElement) {
        inputElement.onblur = function() {
            var errorMessage = rule.test(inputElement.value)
            if (errorMessage) {
                 errorElement.innerText = errorMessage
            } else { 
                errorElement.innerText = ''
            }
        }
    }
    var formElement = document.querySelector(object.form);
    object.rules.forEach(rule => {
        var inputElement = formElement.querySelector(rule.selector);
        var errorElement = inputElement.parentElement.querySelector('.form__group-message');

        validate(inputElement, rule, errorElement);


    });
}


function isRequired(selector) {
    return {
        selector: selector,
        test: function(value) {

        }
    }
}

function isEmail(selector) {
    return {
        selector: selector,
        test: function(value) {
            return value.trim() ? undefined : 'Vui lòng nhập tên chính xác'
        }
    }
}

function isPassword(selector) {
    return {
        selector: selector,
        test: function(value) {

        }
    }
}