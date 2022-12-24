<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>update student</h4></div>
                <div class="card-body">
                    <form @submit.prevent="update">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>typeDocument</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >document</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >firstName</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >lastName</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >firstSurname</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >secondSurname</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2">email</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2">phone</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >address</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2">city</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2"
                                        >semester</label
                                    >
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="floatingTextarea2"
                                    ></textarea>
                                    <label for="floatingTextarea2">sex</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data(){
        name:'edit-student'
        return{
            student: {
                typeDocument: '',
                document: '',
                firstName: '',
                lastName: '',
                firstSurname: '',
                secondSurname: '',
                email: '',
                phone: '',
                address: '',
                city: '',
                semester: '',
                sex:'',
            }
        }
    },
    mounted(){
        this.createStudent()
    },
    // methods wiht async, await and axios
    methods:{
        async createStudent(){
            const response = await axios.get('/api/student/${this.$route.params.id}')
            this.student = response.data
        },
        async update(){
            const response = await axios.put('/api/student/${this.$route.params.id}', this.student)
            this.$router.push({name: 'show-student', params: {id: response.data.id}})
        }
    }

}

</script>