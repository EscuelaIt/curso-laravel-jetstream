window.helpers = function() {
    return {
        text: 'sdsd',
        showMessage(message) {
            alert(message);
            alert(this.text);

            window.guardedForm().guarded = false;
        }
    }
}
