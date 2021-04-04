<?php
	session_start();
	include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/header.php');
?>
	<article class="page">
		<form name="word_add" action="add_entry.php" method="POST" id="wordAddForm">
			<span class="infoForm">	
				<h1>New dictionary entry</h1>	
			</span>
			<table class="tableForm">
				<tr>
					<th>Entry:</th>
					<td>
						<input type="text" name="word" placeholder="Entry you want to add" id="inpTxt">
					</td>
				</tr>
				<tr>
					<th>Description:</th>
					<td>
						<textarea name="desc"  placeholder="Description of new entry" id="txtArea"></textarea>
					</td>
				</tr>
				<tr>
					<th>Type:</th>
					<td class="selectForm">
						<select name="type" id="optSel">
							<option value="Noun" selected>Noun</option>
							<option value="Verb">Verb</option>
							<option value="Adjective">Adjective</option>
							<option value="Adverb">Adverb</option>
							<option value="Interjection">Interjection</option>
							<option value="Phrase">Phrase</option>
							<option value="Idiom">Idiom</option>
						</select>
						<div>
							<a href="https://dictionary.cambridge.org/grammar/british-grammar/word-classes-and-phrase-classes" target="_blank">?</a>
						</div>
					</td>
				</tr>
				<tr>
					<th>Categories:</th>
					<td>
						<nav>
							<?php
								include($_SERVER['DOCUMENT_ROOT'].'/dictionary/resources/connections/select.php');
								$query = 'Select * from categories';
								$result = mysqli_query($conn, $query);
								while($tab = mysqli_fetch_array($result)){
									echo "<label>".$tab['Name'].'<input type="checkbox" name="cat[]" value="'.$tab['ID_cat'].'"></label>';
								}
							?>
						</nav>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">Optional:</td>
				</tr>
				<tr>
					<th>Polish translation:</th>
					<td>
						<input type="text" name="poli">
					</td>
				</tr>
				<tr>
					<th>Synonyms:</th>
					<td>
						<input type="text" name="syno">
					</td>
				</tr>
			</table>
			<nav class="navForm">
				<input type="submit" id="inpSub" value="Submit">
			</nav>
		</form>	
	</article>
<?php
	include($_SERVER['DOCUMENT_ROOT']."/dictionary/resources/footer.php");
?>