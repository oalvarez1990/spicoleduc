<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Create student</h4></div>
                <div class="card-body">
                    <form @submit.prevent="create">
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
export default {
    name: "Create",
    data() {
        return {
            typeDocument: "",
            document: "",
            firstName: "",
            lastName: "",
            firstSurname: "",
            secondSurname: "",
            email: "",
            phone: "",
            address: "",
            city: "",
            semester: "",
            sex: "",
        };
    },
    //create methods async and await adn axios
    methods: {
        async create() {
            const data = {
                typeDocument: this.typeDocument,
                document: this.document,
                firstName: this.firstName,
                lastName: this.lastName,
                firstSurname: this.firstSurname,
                secondSurname: this.secondSurname,
                email: this.email,
                phone: this.phone,
                address: this.address,
                city: this.city,
                semester: this.semester,
                sex: this.sex,
            };
            await axios
                .post("/api/student", data)
                .then((response) => {
                    this.$router.push({ name: "createStudent" });
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
