<?php
$realm = 'Área restrita';

$users = array('admin' => 'maxmeio', 'diego' => 'diego#louise', 'louise' => 'louise#diego');

if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Digest realm="'.$realm.
        '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');

    die('Aréa Restrita, necessário autenticação!');
}

if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
    !isset($users[$data['username']]))
    die('Credenciais inválidas!');


$A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
$A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
$valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

if ($data['response'] != $valid_response)
    die('Credenciais inválidas!');

?>

<?php

require_once("database.php");

include 'components/header.php';

$respostas = select();

?>

<section class="painel">
    <div class="content" style="width: 100%;height: 60%;">
        <h1 style="text-align: center" >Confirmações de Presença</h1>

        <table class="table table-bordered" style="margin-left: 50%;transform: translateX(-50%);width: 11%;">
            <tbody>
            <tr>
                <th scope="row">CONFIRMO</th>
                <td><?php echo count_yes() ?></td>
            </tr>
            <tr>
                <th scope="row">AINDA NÃO SEI</th>
                <td><?php echo count_dontknow() ?></td>
            </tr>
            <tr>
                <th scope="row">NÃO PODEREI IR</th>
                <td><?php echo count_not() ?></td>
            </tr>
            </tbody>
        </table>

        <table class="table table-bordered" style="margin-left: 50%;transform: translateX(-50%);width: 70%;">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Resposta</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($respostas as $key => $value){ ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo $value['nome'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['telefone'] ?></td>
                    <td><?php echo $value['resposta'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div><!-- .content -->
</section><!-- .login -->

<?php include 'components/footer.php'; ?>

<?php
// função para decompor o http auth header
function http_digest_parse($txt)
{
    // proteção contra dados incompletos
    $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
    $data = array();
    $keys = implode('|', array_keys($needed_parts));

    preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

    foreach ($matches as $m) {
        $data[$m[1]] = $m[3] ? $m[3] : $m[4];
        unset($needed_parts[$m[1]]);
    }

    return $needed_parts ? false : $data;
}
?>
