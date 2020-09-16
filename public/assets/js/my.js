$(document).ready(function () {
    $('.hoverMe').tooltip();

    let origin = location.origin
    $("select[id='select-patient']").change(function () {
        let patient_id = $(this).val();
        console.log(patient_id);
        console.log(origin);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: origin + '/patients/' + patient_id + '/searchById',
            method: 'GET',
            data: {},
            dataType: 'json',
            success: function (result) {
                console.log(this.url)
                console.log(result);
                let data = result
                let html =
                    `
                <div >
                    <table class="table">

                        <tr>
                        <th> Họ và tên:</th>
                            <td >${data.name}</td>
                        </tr>
                        <tr>
                        <th>Ngày sinh:</th>
                            <td >${data.dob}  </td>
                        </tr>
                        <tr>
                        <th>Giới Tính:</th>
                            <td >${data.gender}</td>
                        </tr>
                        <tr>
                        <th>Tình trạng:</th>
                            <td >${data.status}</td>
                        </tr>
                        <tr>
                        <th>Ghi chú:</th>
                            <td >${data.note} </td>
                        </tr>
                         <tr>
                         <th>Ngày nhập viện:</th>
                            <td >${data.date} </td>
                        </tr>
                    </table>
                </div>


              `
                $('#patient-detail').html(html)
            },
        })
    })
})
