<script>
    export default {
        data() {
            return {

            }
        },
        methods: {
            deleteStudent(id) {
            swal({
                title: 'Anda pasti?',
                cancelButtonText: 'Batal',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Saya pasti!'
                }).then((result) => {
                if (result.value) {
                    window.location.replace(route('admin.manage.student.destroy', id));
                }
                })
            }
        }
    }
</script>