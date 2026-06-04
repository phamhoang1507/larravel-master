{{-- resources/views/profile.blade.php --}}
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Giới thiệu</title>
</head>

<body>

    @if ($profile)
        <h1>Giới thiệu bản thân</h1>
        <table>
            <tr>
                <td>Họ tên</td>
                <td>{{ $profile->ho_ten }}</td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td>{{ $profile->ngay_sinh->format('d/m/Y') }}</td>
            </tr>
            <tr>
                <td>Nghề nghiệp</td>
                <td>{{ $profile->nghe_nghiep }}</td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td>{{ $profile->que_quan }}</td>
            </tr>
        </table>
    @else
        <p>Chưa có dữ liệu.</p>
    @endif

</body>

</html>
