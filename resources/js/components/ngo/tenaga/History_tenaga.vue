<template>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>History Tenaga Kerja</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/list-tenaga"></a> Tenaga Kerja Asing</li>
                    <li class="breadcrumb-item active">History Tenaga Kerja Asing</li>
                    </ol>
                </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3 class="card-title">History Data Tenaga Asing</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 450px;">
                        <table class="table table-head-fixed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Asal Negara</th>
                                <th>Nomor Passport</th>
                                <th>Masa Berlaku</th>
                                <th>Mitra</th>
                                <th>Tujuan Kegiatan</th>
                                <th>Jabatan</th>
                                <th>Jadwal Kegiatan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
