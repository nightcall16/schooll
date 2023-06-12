const showAddRecordForm = () => {
    const formContainer = document.querySelector('#add-record-form-container');
    const overlay = document.querySelector('#overlay');
    
}
const hideAddRecordForm = () => {
        const formContainer = document.querySelector('#add-record-form-container');
        const overlay = document.querySelector('#overlay');
}

const addRecordButton = document.querySelector('#submit-bottom');
addRecordButton.addEventListener('click', showAddRecordForm);

const changeRecordButtons = document.querySelectorAll('.change-button');
changeRecordButtons.forEach(button => {
  button.addEventListener('click', function(){
    showChangeRecordForm(button);
  });
});

