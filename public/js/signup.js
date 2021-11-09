'use strict'

// Get all the input group
const inp_gr = document.getElementsByClassName('inp-group');

// Function to hide all input group
function display_none_all() {
    for (let i = 0; i < inp_gr.length; i++) {
        inp_gr[i].style.display = 'none';
    }
}

// Disable all before the page is loaded
display_none_all();

// Enable the SignUp part 1 after loaded
window.onload = () => { inp_gr[0].style.display = 'flex'; }
    // Get the buttons
const btn_signup_p1 = document.getElementById('btn-signup-1');
const btn_signup_p2 = document.getElementById('btn-signup-2');
const btn_signup_p3 = document.getElementById('btn-signup-3');
const btn_back_p2 = document.getElementById('btn-back-2');
const btn_back_p3 = document.getElementById('btn-back-3');

// Get the footer part 
const end_link = document.getElementsByClassName('end_link');

// Get the input tags
const input_signup = document.querySelectorAll('.inp-top-holder input');

// Get the message tags
const input_msg = document.querySelectorAll('.valid-message');

// Get the placeholders
const input_placeholder = document.querySelectorAll('.inp-top-holder span');

// Get all avatar images
const avt_img_arr = document.querySelectorAll('.sample-avatar img');
const radio_avt = document.getElementsByName('avatar');

// Get the preview image
const add_img = document.getElementById('upload-avt');

function isRadioChecked() {
    for (const radio of radio_avt) {
        if (radio.checked) return true;
    }
    return false;
}

// Auto capitalize Full name
function toCapitalize(words) {
    var separateWord = words.split(' ');
    for (var i = 0; i < separateWord.length; i++) {
        separateWord[i] = separateWord[i].charAt(0).toUpperCase() +
            separateWord[i].substring(1);
    }
    return separateWord.join(' ');
}

// Error message
function toRed(e, num, message = 'Please fill out this field!') {
    e.style.borderColor = '#f00';
    input_placeholder[num].style.color = '#f00';
    input_msg[num].innerHTML = message;
}

// After validated
function toNormal(e, num) {
    e.style.borderColor = '#2d3791';
    input_msg[num].innerHTML = '';
    input_placeholder[num].style.color = '#2d3791';
}

// Switch the input groups forward and backward + validate
btn_signup_p1.addEventListener('click', () => {
    if (input_signup[0].onblur() && input_signup[1].onblur() && input_signup[2].onblur()) {
        display_none_all();
        inp_gr[1].style.display = 'flex';
        end_link[1].style.display = 'none';
    } else {
        for (let i = 0; i < 3; i++) {
            input_signup[i].focus();
            input_signup[i].blur();
        }
    }
});

btn_signup_p2.addEventListener('click', () => {
    if (input_signup[3].onblur() && input_signup[4].onblur()) {
        display_none_all();
        inp_gr[2].style.display = 'flex';
    } else {
        for (let i = 3; i < 5; i++) {
            input_signup[i].focus();
            input_signup[i].blur();
        }
    }
});

btn_signup_p3.addEventListener('click', () => {
    if (add_img.value != '') {
        document.getElementById('to-signin').click();
    } else if (isRadioChecked()) {
        document.getElementById('to-signin').click();
    } else {
        let cfr = confirm('Continue without choosing avatar? A random avatar is selected for you.');
        if (cfr) {
            const random = Math.floor(Math.random() * (radio_avt.length));
            radio_avt[random].checked = true;
            document.getElementById('to-signin').click();
        }
    }
});

btn_back_p2.addEventListener('click', () => {
    display_none_all();
    inp_gr[0].style.display = 'flex';
    end_link[1].style.display = 'block';
});

btn_back_p3.addEventListener('click', () => {
    display_none_all();
    inp_gr[1].style.display = 'flex';
});

// Validate input part 1 - username
input_signup[0].onblur = function() {
    let flag0 = false;
    if (this.value === '') {
        toRed(this, 0);
    } else if (this.value.length < 8) {
        toRed(this, 0, 'Username contains at least 8 characters!');
    } else if (this.value.length > 50) {
        toRed(this, 0, 'Username reaches maximum characters!');
    } else if (this.value.includes(' ')) {
        toRed(this, 0, 'Username cannot contains spaces!');
    } else if (!this.value.match(/^[0-9a-zA-Z]+$/)) {
        toRed(this, 0, 'Username cannot contains special characters!');
    } else {
        toNormal(this, 0);
        flag0 = true;
    }
    this.addEventListener('keyup', function() {
        if (this.value.length < 8) {
            toRed(this, 0, 'Username contains at least 8 characters!');
        } else if (this.value.length > 50) {
            toRed(this, 0, 'Username reaches maximum characters!');
        } else if (this.value.includes(' ')) {
            toRed(this, 0, 'Username cannot contains spaces!');
        } else if (!this.value.match(/^[0-9a-zA-Z]+$/)) {
            toRed(this, 0, 'Username cannot contains special characters!');
        } else {
            toNormal(this, 0);
            flag0 = true;
        }
    });
    return flag0;
}

// Validate input part 1 - full name
input_signup[1].onblur = function() {
    let flag1 = false;
    if (this.value === '') {
        toRed(this, 1);
    } else if (this.value.length > 100) {
        toRed(this, 1, 'Full name reaches maximum characters!');
    } else {
        toNormal(this, 1)
        this.value = toCapitalize(this.value);
        flag1 = true;
    }
    this.addEventListener('keyup', function() {
        if (this.value.length > 100) {
            toRed(this, 1, 'Full name reaches maximum characters!');
        } else {
            toNormal(this, 1)
            this.value = toCapitalize(this.value);
            flag1 = true;
        }
    });
    return flag1;
}

// Validate input part 1 - email
input_signup[2].onblur = function() {
    let flag2 = false;
    if (this.value === '') {
        toRed(this, 2);
    } else if (!this.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
        toRed(this, 2, 'Invalid email format!');
    } else {
        toNormal(this, 2);
        flag2 = true;
    }
    this.addEventListener('keyup', function() {
        if (!this.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
            toRed(this, 2, 'Invalid email format!');
        } else {
            toNormal(this, 2);
            flag2 = true;
        }
    });
    return flag2;
}

// Validate input part 2 - password
input_signup[3].onblur = function() {
    let flag3 = false;
    if (this.value === '') {
        toRed(this, 3);
    } else if (this.value.length < 8) {
        toRed(this, 3, 'Password must be at least 8 characters!');
    } else if (!this.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/)) {
        toRed(this, 3, 'Password must contains lowercase, uppercase and number!');
    } else {
        toNormal(this, 3);
        flag3 = true;
    }
    this.addEventListener('keyup', function() {
        if (this.value.length < 8) {
            toRed(this, 3, 'Password must be at least 8 characters!');
        } else if (!this.value.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/)) {
            toRed(this, 3, 'Password must contains lowercase, uppercase and number!');
        } else {
            toNormal(this, 3);
            flag3 = true;
        }
    });
    return flag3;
}

// Validate input part 3 - repeat password 
input_signup[4].onblur = function() {
    let flag4 = false;
    if (this.value === '') {
        toRed(this, 4);
    } else if (this.value != input_signup[3].value) {
        toRed(this, 4, 'The password is not match!');
    } else {
        toNormal(this, 4);
        flag4 = true;
    }
    this.addEventListener('keyup', function() {
        if (this.value != input_signup[3].value) {
            toRed(this, 4, 'The password is not match!');
        } else {
            toNormal(this, 4);
            flag4 = true;
        }
    });
    return flag4;
}

add_img.onchange = function(event) {
    let flag = false;
    for (let i = 0; i < avt_img_arr.length - 1; i++) {
        avt_img_arr[i].checked = false;
    }
    if (!add_img.value.match(/(\.jpg|\.jpeg|\.png)$/i)) {
        alert('The file is not supported!');
        add_img.value = '';
    } else if (add_img.files && add_img.files.length == 1 && add_img.files[0].size > 5300000) {
        alert('The size of file is too large!');
        add_img.value = '';
    } else {
        var reader = new FileReader();
        reader.onload = function() {
            const prw = document.getElementById('add-picture');
            prw.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
        flag = true;
        inactive_all_img();
    }
    return flag;
}

function inactive_all_img() {
    for (let j = 0; j < avt_img_arr.length - 1; j++) {
        avt_img_arr[j].style.backgroundColor = '#fff';
    }
}

for (let i = 0; i < avt_img_arr.length - 1; i++) {
    avt_img_arr[i].addEventListener('click', ActiveImg);
}

function ActiveImg() {
    inactive_all_img();
    this.style.backgroundColor = '#ddd';
}