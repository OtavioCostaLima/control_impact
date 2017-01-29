
//<![CDATA[
window.onload = function () {
    $(document).ready(function () {
        $('select').material_select();
    });
}//]]> 

$(document).ready(function () {
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();

});

new Vue({

    el: '#manage-vue',

    data: {
        oi: 'ola',
        items: [],
        newItem: {'title': '', 'description': ''},
        fillItem: {'title': '', 'description': '', 'id': ''}
    },

    methods: {

        getVueItems: function () {
            this.$http.get('/disciplina').then((response) => {
                this.$set('items', response.data.data.data);
            });
        },

        createItem: function () {
            var input = this.newItem;
            this.$http.post('/vueitems', input).then((response) => {
                this.changePage(this.pagination.current_page);
                this.newItem = {'title': '', 'description': ''};
                $("#create-item").modal('hide');
                toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
            }, (response) => {
                this.formErrors = response.data;
            });
        },

        deleteItem: function (item) {
            this.$http.delete('/vueitems/' + item.id).then((response) => {
                this.changePage(this.pagination.current_page);
                toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            });
        },

        editItem: function (item) {
            this.fillItem.descricao = item.descricao;
            this.fillItem.id = item.id;
            this.fillItem.tipo = item.tipo;
            $("#edit-item").modal('show');
        },

        updateItem: function (id) {
            var input = this.fillItem;
            this.$http.put('/vueitems/' + id, input).then((response) => {
                this.changePage(this.pagination.current_page);
                this.fillItem = {'title': '', 'description': '', 'id': ''};
                $("#edit-item").modal('hide');
                toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
            }, (response) => {
                this.formErrorsUpdate = response.data;
            });
        },

    }

});
