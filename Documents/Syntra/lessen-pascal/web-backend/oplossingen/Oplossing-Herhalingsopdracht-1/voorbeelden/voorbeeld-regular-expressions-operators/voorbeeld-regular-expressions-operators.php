<?php


	$exampleString = '<p>You know what they call a <span>Quarter Pounder</span> with cheese in France? *1994</p>';
	
	$replaceString = '#';

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voorbeeld regular expressions operators</title>
    <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    <link rel="stylesheet" href="http://web-backend.local/css/facade.css">
    <link rel="stylesheet" href="http://web-backend.local/css/directory.css">
</head>

<body class="web-backend-voorbeeld">

	<section class="body">
		<style>
			
			table {
				border-collapse:collapse;
			}
			
			th {
				text-align:left;
			}
			
			th, td {
				padding:10px;
			}
			
			tbody tr:nth-child(even) {
				background-color:#E8E8E8;
			}
			
			.regexed {
				color:grey;
			}
			
			.regexed span {
				color:black;
				font-weight:bold;
			}
			
			.italic {
				font-style:italic;
			}
			
			.next-slide td {
				border-width:5px 1px 1px 1px;
			}
		</style>

		<h1>Voorbeeld regular expressions operators</h1>


		<h2>Operatoren</h2>	

				
			<p>Voorbeeldstring: <span class="italic"><?php echo htmlspecialchars($exampleString) ?></span></p> 					
	
			<table>
				<thead>
					<tr>
						<th>Regular expression</th>
						<th>Resultaat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>e</code></td>
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/e/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>cheese</code></td>
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/cheese/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>^&lt;</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/^</', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>&gt;$</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/>$/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>[et]</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[et]/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>[^et]</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[^et]/', $replaceString, $exampleString)) ?></td>
					</tr>			
					<tr>
						<td><code>[a-q]</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[a-q]/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>Quarter|Pounder|France</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/Quarter|Pounder|France/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr class="next-slide">
						<td><code>\*</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\*/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>a.</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/a./', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>e?s</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/e?s/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>e*s</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/e*s/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>[el]+</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[el]+/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>[0-9]{4}</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[0-9]{4}/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>[0-9]{1,2}</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/[0-9]{1,2}/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr class="next-slide">
						<td><code>\d</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\d/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>\D</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\D/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>\s</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\s/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>\S</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\S/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>\w</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\w/', $replaceString, $exampleString)) ?></td>
					</tr>
					<tr>
						<td><code>\W</code></td> 
						<td class="regexed"><?php echo htmlspecialchars(preg_replace('/\W/', $replaceString, $exampleString)) ?></td>
					</tr>
					
				</tbody>
			</table>
	
	</section>

</body>
</html>