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
                    `<tr>
                    <td style="border: none "><b>Họ và tên: </b>${data.name}</td>
                    </tr>
                    <tr>
                    <td style="border: none"><b>Ngày sinh: </b> ${data.dob} </td>
                    </tr>
<tr>
                    <td style="border: none "><b>Giới Tính: </b>${data.gender}</td>
                    </tr>
                    <tr>
                    <td style="border: none"><b>Tình trạng: </b> ${data.status} </td>
                    </tr>`

                $('#patient-detail').html(html)
            },
        })
    })
})
