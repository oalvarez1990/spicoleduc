<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link :to="{ name: 'createStudent' }" class="btn btn-success"
                ><i class="fas fa-plus-circle"></i
            ></router-link>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>typeDocument:</th>
                            <th>document:</th>
                            <th>firstName:</th>
                            <th>lastName:</th>
                            <th>firstSurname:</th>
                            <th>secondSurname:</th>
                            <th>email:</th>
                            <th>phone:</th>
                            <th>address:</th>
                            <th>city:</th>
                            <th>semester:</th>
                            <th>sex:</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="student in students" :key="student.id">
                            <td>{{ student.typeDocument }}</td>
                            <td>{{ student.document }}</td>
                            <td>{{ student.firstName }}</td>
                            <td>{{ student.lastName }}</td>
                            <td>{{ student.firstSurname }}</td>
                            <td>{{ student.secondSurname }}</td>
                            <td>{{ student.email }}</td>
                            <td>{{ student.phone }}</td>
                            <td>{{ student.address }}</td>
                            <td>{{ student.city }}</td>
                            <td>{{ student.semester }}</td>
                            <td>{{ student.sex }}</td>
                            <td>
                                <!-- llamamos al componente para Editar     -->
                                <router-link
                                    :to="{
                                        name: 'editStudent',
                                        params: { id: student.id },
                                    }"
                                    class="btn btn-info"
                                    ><i class="fas fa-edit"></i
                                ></router-link>
                                <a
                                    type="button"
                                    @click="removeStudent(student.id)"
                                    class="btn btn-danger"
                                    ><i class="fas fa-trash"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
