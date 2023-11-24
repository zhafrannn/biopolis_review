<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <center role="article" lang="en" style="width:100%;background-color:#f8f8f8">





        <div style="max-width:600px;margin:0 auto" class="m_-1064284590674130966email-container">







            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%"
                style="margin:auto">



                <tbody>
                    <tr>

                        <td align="left" style="padding:24px 20px;background-color:#ffffff;text-align:left">

                            <img src="https://testing-biopolis.alaningrat.com/logo-biopolis.png" width="80"
                                height="80" alt="biopolis logo"
                                style="width:100%;max-width:80px;background:#fff;display:block"
                                class="m_-1064284590674130966g-img CToWUd" data-bit="iit">

                        </td>

                    </tr>

                    <tr>

                        <td style="padding:8px 20px 16px;background-color:#ffffff">

                            <h3
                                style="margin:0;font-family:Helvetica,Arial,sans-serif;font-weight:bold;font-size:20px;line-height:26px;text-align: center">
                                Terima kasih telah melakukan pembayaran!
                            </h3>

                            <p
                                style="margin:4px 0 0;font-family:Helvetica,Arial,sans-serif;font-size:14px;line-height:21px">

                                Detail pembelian:

                            </p>

                        </td>

                    </tr>


                    <tr>
                        <td style="padding:20px;background-color:#ffffff">

                            <table role="presentation" cellspacing="0" border="0" width="100%">

                                <tbody>
                                    <tr>

                                        <td style="padding:0 16px 16px 16px;background-color:#f3f4f5;border-radius:8px">

                                            <table role="presentation" cellspacing="0" border="0" width="100%">

                                                <tbody>
                                                    <tr>

                                                        <td>

                                                            <div class="m_-1064284590674130966stack-column"
                                                                style="padding-top:16px;display:inline-block;width:100%;max-width:260px;vertical-align:top">

                                                                <table role="presentation" cellspacing="0"
                                                                    border="0" width="100%">

                                                                    <tbody>
                                                                        <tr>

                                                                            <td style="padding-bottom:16px">

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Total Pembayaran

                                                                                </p>

                                                                                <p
                                                                                    style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#393d42">

                                                                                    Rp{{ number_format($data['total_pembayaran']) }},-

                                                                                </p>

                                                                            </td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td style="padding-bottom:16px">

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Untuk Pembelian

                                                                                </p>

                                                                                <p
                                                                                    style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#393d42">



                                                                                    {{ $data['nama_produk'] }} Biopolis



                                                                                </p>

                                                                            </td>

                                                                        </tr>





                                                                        <tr>

                                                                            <td>

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Kode Pembayaran

                                                                                </p>

                                                                                <p
                                                                                    style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#393d42">

                                                                                    {{ $data['kode_pembayaran'] }}

                                                                                </p>

                                                                            </td>

                                                                        </tr>





                                                                    </tbody>
                                                                </table>

                                                            </div>



                                                            <div class="m_-1064284590674130966stack-column"
                                                                style="padding-top:16px;display:inline-block;width:100%;max-width:260px;vertical-align:top">

                                                                <table role="presentation" cellspacing="0"
                                                                    border="0" width="100%">

                                                                    <tbody>
                                                                        <tr>

                                                                            <td style="padding-bottom:16px">

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Tanggal Pembelian

                                                                                </p>

                                                                                <p
                                                                                    style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#393d42">

                                                                                    {{ $data['tanggal'] }}

                                                                                </p>

                                                                            </td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td style="padding-bottom:16px">

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Deskripsi Produk

                                                                                </p>





                                                                                <p
                                                                                    style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#393d42">

                                                                                    {{ $data['pembelian'] }}

                                                                                </p>





                                                                            </td>

                                                                        </tr>

                                                                        <tr>

                                                                            <td>

                                                                                <p
                                                                                    style="margin:0 0 2px;font-family:Helvetica,Arial,sans-serif;font-size:12px;line-height:18px;color:#727579">

                                                                                    Status Pembayaran

                                                                                </p>
                                                                                <div>

                                                                                    <p
                                                                                        style="margin:0;font-family:Helvetica,Arial,sans-serif;font-size:14px;font-weight:bold;line-height:21px;color:#ffffff;background:#20B15A;border-radius:20px;width:fit-content;height:fit-content;padding:10px 20px;">

                                                                                        Paid

                                                                                    </p>
                                                                                </div>

                                                                            </td>

                                                                        </tr>

                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>

                                        </td>

                                    </tr>

                                </tbody>
                            </table>

                        </td>

                    </tr>















                </tbody>
            </table>














        </div>





    </center>
</body>

</html>
