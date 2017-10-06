{{--
 * @file
 * User activation email.
 *
 * All DecimaERP code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 --}}
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
    <p>Correo electrónico: {{ $input['email']}}</p>
    <p>Nombre del contacto: {{ $input['name']}}</p>
    <p>Teléfono: {{ $input['phone']}}</p>
    <p>Tipo: {{ $input['tipo']}}</p>
    <p>Descripción: {{ $input['observation']}}</p>
    <p>País: {{ $input['country']}}</p>
	</body>
</html>
