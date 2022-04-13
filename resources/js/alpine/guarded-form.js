window.guardedForm = function() {
    return {
        guarded: false,
        guardForm() {
            window.addEventListener('beforeunload', (event) => {
                if (this.guarded === true) {
                    event.returnValue = 'Wait';
                }
            });
        }
    }
}
