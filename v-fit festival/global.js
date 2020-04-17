$('.form-disable').on('button',function(){
    var self=$(this),
        button=self.find('input[type="button1"],button'),
        submitVlue=button.data('submit-value')
    button.attr('disable,disable').val((submitValue)?submitValue: 'please fill all requirments..');

                     
                     
            return false;})         
                     ;