<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kelola Data Produk
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

                    <!-- FLASH MESSAGE AKAN DITEMPATKAN DISINI -->

                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Tambah Produk</button>
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2">Kode</th>
                                <th class="px-4 py-2">Nama Produk</th>
                                <th class="px-4 py-2">Harga</th>
                                <th class="px-4 py-2">Berat</th>
                                <th class="px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody v-if="data.length > 0">
                            <tr v-for="(row, index) in data" :key="index">
                                <td class="border px-4 py-2">{{ row.code }}</td>
                                <td class="border px-4 py-2">{{ row.name }}</td>
                                <td class="border px-4 py-2">{{ row.price }}</td>
                                <td class="border px-4 py-2">{{ row.weight }} gr</td>
                                <td class="border px-4 py-2">
                                    <button @click="edit(row)" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</button>
                                    <button @click="deleteRow(row)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                        </tbody>
                    </table>

                  	<!-- MODAL TAMBAH & EDIT PRODUK AKAN DITEMPATKAN DISINI -->
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props: ['data'],
        data() {
            return {
                editMode: false,
                isOpen: false,
                form: {
                    code: null,
                    name: null,
                    price: null,
                    weight: null,
                },
            }
        },
        methods: {
            openModal() {

            },
            closeModal() {

            },
            reset() {

            },
            save() {
                //CODE FUNGSI SAVE AKAN DISIMPAN DISINI
            },
            edit(data) {
                //CODE BUKA MODAL EDIT DATA AKAN DISIMPAN DISINI
            },
            update() {
              //CODE UPDATE DATA AKAN DISIMPAN DISINI
            },
            deleteRow(data) {
                //CODE HAPUS DATA DISINI
            }
        }
    }
</script>
