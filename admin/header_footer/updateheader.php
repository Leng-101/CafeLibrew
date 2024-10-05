<!DOCTYPE html>
<html>
    <head>
        <title>Cafe Librew- Form</title>
        <link rel="stylesheet" type="text/css" href="../admin_css/form.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href ="..\admin_assests\logo.png" type="image/x-icon"> <!-- Logo of Website -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class ="container">
            <div class="row">

                <div class="left">
                    <div class="header">
                        <ul >
                            <li><a href="main.php"><img class="logo" src="../admin_assests/logo.png"></a></li>
                            <li><h1>CAFE LIBREW</h1></li>
                            <li><h3>RESERVATION SYSTEM</h3></li>
                        </ul> 
                    </div>
                    <div class="form_container">
                        <h1 class="label"> RESERVATION UPDATE FORM</h1>
                        <form method="post">
                        <div class="basic_info_form">
                            <h2>BASIC INFORMATION</h2>
                                <div class="form_left">
                                    <label for="Name" class="form-label">Name</label> <br> 
                                    <input type="text" class="form-control" name="name" value="<?php echo $name;?>" br> 

                                    <label for="contact_num" class="form-label">Contact Number</label><br> 
                                    <input type="text" class="form-control"  name="contact_number" value="<?php echo $contact_number;?>"><br> 
                         
                                    <label for="time_begins" class="form-label">Time Begins<label><br> 
                                    <select id=time_begins class="form-control" name="time_begins" >
                                        <option selected value="<?php echo $time_begins;?>"><?php echo $time_begins;?></option>
                                        <option value="7:00 AM">7:00 AM</option>
                                        <option value="8:00 AM">8:00 AM</option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="12:00 NN">12:00 NN</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                    </select>
                                </div>
                                <div class="form_right">
                                    <label for="email" class="form-label">Email</label><br> 
                                    <input type="email" class="form-control"  placeholder="@gmail.com" name="email" value="<?php echo $email;?>"><br> 

                                    <label for="date" class="form-label">Date</label><br> 
                                    <input type="date" class="form-control" name="date" value="<?php echo $date;?>"><br> 
                         
                                    <label for="time_ends" class="form-label">Time Ends<label><br> 
                                    <select id="time_ends" class="form-control" name="time_ends" >
                                        <option selected value="<?php echo $time_ends;?>"><?php echo $time_ends;?></option>
                                        <option value="9:00 AM">9:00 AM</option>
                                        <option value="10:00 AM">10:00 AM</option>
                                        <option value="11:00 AM">11:00 AM</option>
                                        <option value="12:00 NN">12:00 NN</option>
                                        <option value="1:00 PM">1:00 PM</option>
                                        <option value="2:00 PM">2:00 PM</option>
                                        <option value="3:00 PM">3:00 PM</option>
                                        <option value="4:00 PM">4:00 PM</option>
                                        <option value="5:00 PM">5:00 PM</option>
                                        <option value="6:00 PM">6:00 PM</option>
                                        <option value="7:00 PM">7:00 PM</option>
                                        <option value="8:00 PM">8:00 PM</option>
                                        <option value="9:00 PM">9:00 PM</option>
                                        <option value="10:00 PM">10:00 PM</option>
                                    </select>
                                </div>
                        </div><!--end of basic info form-->
                        <div class="books_form">
                            <h2>BOOKS</h2>
                            <div class="form_left">
                                <label for="book1" class="form-label">ROMANCE & ROM-COM</label> <br> 
                                <select id="book1" class="form-control" name="book1" >
                                    <option selected value="<?php echo $book1;?>"><?php echo $book1;?></option>
                                    <option value="none">none</option>
                                    <option value="The Hating Game by Sally Thorne">The Hating Game by Sally Thorne</option>
                                    <option value="The Kiss Quotient by Helen Hoang">The Kiss Quotient by Helen Hoang</option>
                                    <option value="I Kissed Shara Wheeler by Casey McQuiston">I Kissed Shara Wheeler by Casey McQuiston</option>
                                    <option value="Billion Dollar Marriage by Alyssa Urbano">Billion Dollar Marriage by Alyssa Urbano</option>
                                    <option value="Bucket List to Love by C.P. Santi">Bucket List to Love by C.P. Santi</option>
                                    <option value="Love and Gravity by Samantha Sotto">Love and Gravity by Samantha Sotto</option>
                                    <option value="Never Just Friends by Mina V. Esguerra">Never Just Friends by Mina V. Esguerra</option>
                                    <option value="Til Death by Kate Evangelista">Til Death by Kate Evangelista</option>
                                    <option value="Bared to You by Sylvia Day">Bared to You by Sylvia Day</option>
                                    <option value="Love at First Like: A Novel by Hannah Orenstein">Love at First Like: A Novel by Hannah Orenstein</option>
                                    <option value="Eleanor & Park by Rainbow Rowell">Eleanor & Park by Rainbow Rowell</option>
                                    <option value="A Woman is no Man by Etuf Rum">A Woman is no Man by Etuf Rum</option>
                                    <option value="The Seven Husband of Evelyn Hugo by Taylor Jenkins">The Seven Husband of Evelyn Hugo by Taylor Jenkins</option>
                                    <option value="It Ends with Us by Colleen Hoover">It Ends with Us by Colleen Hoover</option>
                                    <option value="Without Merit by Colleen Hoover">Without Merit by Colleen Hoover</option>
                                    <option value="November 9 by Colleen Hoover">November 9 by Colleen Hoover</option>
                                    <option value="Vintage Love by Agay Llanera">Vintage Love by Agay Llanera</option>
                                    <option value="Love on the Brain by Ali Hazelwood">Love on the Brain by Ali Hazelwood</option>
                                    <option value="Maybe in Another Life: A Novel by Taylor Jenkins Reid">Maybe in Another Life: A Novel by Taylor Jenkins Reid</option>
                                    <option value="The Love Hypothesis by Ali Hazelwood">The Love Hypothesis by Ali Hazelwood</option>
                                    <option value="Meet Me In The Margins by Melissa Ferguson">Meet Me In The Margins by Melissa Ferguson</option>
                                    <option value="Love In The City by Jen Morris">Love In The City by Jen Morris</option>
                                    <option value="Roommaid by Sariah Wilson">Roommaid by Sariah Wilson</option>
                                    <option value="Boyfriend Material by Alexis Hall">Boyfriend Material by Alexis Hall</option>
                                    <option value="The Dating Game by Sandy Barker">The Dating Game by Sandy Barker</option>
                                    <option value="Act Your Age, Eve Brown by Talia Hibbert">Act Your Age, Eve Brown by Talia Hibbert</option>
                                    <option value="Meet Cute by Helena Hunting">Meet Cute by Helena Hunting</option>
                                    <option value="The Flatshare by Beth O'leary">The Flatshare by Beth O'leary</option>
                                    <option value="The Ex-Talk by Rachel Lynn Solomon">The Ex-Talk by Rachel Lynn Solomon"</option>
                                    <option value="The Boyfriend Project by Farrah Rochon">The Boyfriend Project by Farrah Rochon</option>
                                    <option value="The Rosie Project by Graeme Simsion">The Rosie Project by Graeme Simsion</option>
                                    <option value="The Party Crasher by Sophie Kinsella">The Party Crasher by Sophie Kinsella</option>
                                    <option value="The Bromance Book Club by Lyssa Kay Adams">The Bromance Book Club by Lyssa Kay Adams</option>
                                    <option value="Resting Beach Face by Melanie Summers">Resting Beach Face by Melanie Summers</option>
                                    <option value="The Overdue Life Of Amy Byler by Kelly Harms">The Overdue Life Of Amy Byler by Kelly Harms</option>
                                    <option value="The Accidental Beauty Queen by Teri Wilson">The Accidental Beauty Queen by Teri Wilson</option>
                                    <option value="The Unhoneymooners by Christina Lauren">The Unhoneymooners by Christina Lauren</option>
                                    <option value="Josh And Hazel s Guide To Not Dating by Christina Lauren">Josh And Hazel s Guide To Not Dating by Christina Lauren</option>
                                    <option value="The Bookish Life Of Nina Hill by Abbi Waxman">The Bookish Life Of Nina Hill by Abbi Waxman</option>
                                    <option value="Well Met by Jen Deluca">Well Met by Jen Deluca</option>
                                </select>
                                <label for="book2" class="form-label">LITERARY FICTION & HISTORICAL</label> <br> 
                                <select id="book2"class="form-control" name="book2">
                                    <option selected value="<?php echo $book2;?>"><?php echo $book2;?></option>
                                    <option value="none">none</option>
                                    <option value="Lilac Girls by Martha Hall Kelly">Lilac Girls by Martha Hall Kelly</option>
                                    <option value="The Vanishing Half by Brit Bennett">The Vanishing Half by Brit Bennett</option>
                                    <option value="The Secret History by Donna Tartt">The Secret History by Donna Tartt</option>
                                    <option value="The Kite Runner by Khaled Hosseini">The Kite Runner by Khaled Hosseini</option>
                                    <option value="The Remains of the Day by Kazuo Ishiguro">The Remains of the Day by Kazuo Ishiguro</option>
                                    <option value="The Shadow of the Wind by Carlos Ruiz Zafon">The Shadow of the Wind by Carlos Ruiz Zafon</option>
                                    <option value="The Handmaid s Tale by Margaret Atwood">The Handmaid s Tale by Margaret Atwood</option>
                                    <option value="Cloud Cuckoo Land by Anthony Doerr">Cloud Cuckoo Land by Anthony Doerr</option>
                                    <option value="What s Mine and Yours by Naima Coster">What s Mine and Yours by Naima Coster</option>
                                    <option value="The Sweetness of Water by Nathan Harris">The Sweetness of Water by Nathan Harris</option>
                                    <option value="Infinite Country by Patricia Engel">Infinite Country by Patricia Engel</option>
                                    <option value="The Dutch House by Ann Patchett">The Dutch House by Ann Patchett</option>
                                    <option value="Hamnet by Maggie O Farrell">Hamnet by Maggie OFarrell</option>
                                    <option value="The Overstory by Richard Powers">The Overstory by Richard Powers</option>
                                    <option value="Fifty Words For Rain by Asha Lemmie">Fifty Words For Rain by Asha Lemmie</option>
                                    <option value="This Tender Land by William Kent Krueger">This Tender Land by William Kent Krueger</option>
                                    <option value="Against The Loveless World by Susan Abulhawa">Against The Loveless World by Susan Abulhawa</option>
                                    <option value="Everywhere You Don t Belong by Gabriel Bump">Everywhere You Don t Belong by Gabriel Bump</option>
                                    <option value="Big Girl, Small Town by Michelle Gallen">Big Girl, Small Town by Michelle Gallen</option>
                                    <option value="Afterlife by Julia Alvarez">Afterlife by Julia Alvarez</option>
                                    <option value="What Is History? by Edward Hallett Carr">What Is History? by Edward Hallett Carr</option>
                                    <option value="History of the Filipino People by Teodoro A. Agoncillo">History of the Filipino People by Teodoro A. Agoncillo</option>
                                    <option value="Philippine History and Government by Sonia M. Zaide">Philippine History and Government by Sonia M. Zaide</option>
                                    <option value="History of the Philippines: From Indios Bravos to Filipinos by Luis H. Francia">History of the Philippines: From Indios Bravos to Filipinos by Luis H. Francia</option>
                                    <option value="Rampage: MacArthur, Yamashita, and the Battle of Manila by James M. Scott">Rampage: MacArthur, Yamashita, and the Battle of Manila by James M. Scott</option>
                                    <option value="Manila, My Manila by Nick Joaquín">Manila, My Manila by Nick Joaquín</option>
                                    <option value="Philippine History by Teodoro A. Agoncillo">Philippine History by Teodoro A. Agoncillo3</option>
                                    <option value="Bones of Contention: The Andres Bonifacio Lectures by Ambeth R. Ocampo">Bones of Contention: The Andres Bonifacio Lectures by Ambeth R. Ocampo</option>
                                    <option value="A Nation Aborted: Rizal, American Hegemony, and Philippine Nationalism by Floro C. Quibuyen">A Nation Aborted: Rizal, American Hegemony, and Philippine Nationalism by Floro C. Quibuyen</option>
                                    <option value="Looking BackLooking Back by Ambeth R. Ocampo">Looking BackLooking Back by Ambeth R. Ocampo</option>
                                    <option value="Culture and History by Nick Joaquín">Culture and History by Nick Joaquín</option>
                                    <option value="A Question of Heroes by Nick Joaquín">A Question of Heroes by Nick Joaquín</option>
                                    <option value="Rampage: MacArthur, Yamashita, and the Battle of Manila by James M. Scott">Rampage: MacArthur, Yamashita, and the Battle of Manila by James M. Scott</option>
                                    <option value="Si Diwayen, Noong Bago Dumating ang mga Espanyol by Augie Rivera">Si Diwayen, Noong Bago Dumating ang mga Espanyol by Augie Rivera</option>
                                    <option value="El Filibusterismo by José Rizal">El Filibusterismo by José Rizal</option>
                                    <option value="Noli Me Tangere by José Rizal">Noli Me Tangere by José Rizal</option>
                                    <option value="Talking History: Conversations with Teodoro A. Agoncillo by Ambeth R. Ocampo">Talking History: Conversations with Teodoro A. Agoncillo by Ambeth R. Ocampo</option>
                                    <option value="Readings in Philippine History by John Lee P. Candelaria">Readings in Philippine History by John Lee P. Candelaria</option>
                                    <option value="Rizal: Makabayan at Martir by Austin Coates">Rizal: Makabayan at Martir by Austin Coates</option>
                                    <option value="Marcos Martial Law: Never Again by Raissa Robles">Marcos Martial Law: Never Again by Raissa Robles</option>
                                </select>
                            </div>
                            <div class="form_right">
                                <label for="book3" class="form-label">SCI-FI & MYSTERY</label> <br> 
                                <select id="book3"class="form-control" name="book3" >
                                    <option selected value="<?php echo $book3;?>"> <?php echo $book3;?></option>
                                    <option value="none">none</option>
                                    <option value="A Desolation Called Peace by Arkady Martine">A Desolation Called Peace by Arkady Martine</option>
                                    <option value="Sea of Tranquility by Emily St. John Mandel">Sea of Tranquility by Emily St. John Mandel</option>
                                    <option value="Eyes of the Void by Adrian Tchaikovsky">Eyes of the Void by Adrian Tchaikovsky</option>
                                    <option value="How High We Go in the Dark by Sequoia Nagamatsu">How High We Go in the Dark by Sequoia Nagamatsu</option>
                                    <option value="A Prayer for the Crown-Shy by Becky Chambers">A Prayer for the Crown-Shy by Becky Chambers</option>
                                    <option value="The School for Good Mothers by Jessamine Chan">The School for Good Mothers by Jessamine Chan</option>
                                    <option value="The Kaiju Preservation Society by John Scalzi">The Kaiju Preservation Society by John Scalzi</option>
                                    <option value="Dead Silence by S.A. Barnes">Dead Silence by S.A. Barnes</option>
                                    <option value="Tell Me an Ending by Jo Harkin">Tell Me an Ending by Jo Harkin</option>
                                    <option value="Goliath by Tochi Onyebuchi">Goliath by Tochi Onyebuchi</option>
                                    <option value="The Paradox Hotel by Rob Hart">The Paradox Hotel by Rob Hart</option>
                                    <option value="Mickey7 by Edward Ashton">Mickey7 by Edward Ashton</option>
                                    <option value="Upgrade by Blake Crouch">Upgrade by Blake Crouch</option>
                                    <option value="Hunt the Stars by Jessie Mihalik">Hunt the Stars by Jessie Mihalik</option>
                                    <option value="The Left Hand of Darkness by Ursula K. Le Guin">The Left Hand of Darkness by Ursula K. Le Guin</option>
                                    <option value="The Hitch-Hiker s Guide to the Galaxy by Douglas Adams">The Hitch-Hiker s Guide to the Galaxy by Douglas Adams</option>
                                    <option value="Ender s Game by Orson Scott Card">Ender s Game by Orson Scott Card</option>
                                    <option value="Dune by Frank Herbert">Dune by Frank Herbert</option>
                                    <option value="Fahrenheit 451 by Ray Bradbury">Fahrenheit 451 by Ray Bradbury</option>
                                    <option value="Brave New World by Aldous Huxley">Brave New World by Aldous Huxley</option>
                                    <option value="And Then There Were None by Agatha Christie">And Then There Were None by Agatha Christie</option>
                                    <option value="The Big Sleep by Raymond Chandler">The Big Sleep by Raymond Chandler</option>
                                    <option value="The Postman Always Rings Twice by James M. Cain">The Postman Always Rings Twice by James M. Cain</option>
                                    <option value="In Cold Blood by Truman Capote">In Cold Blood by Truman Capote</option>
                                    <option value="Woman in White by Wilkie Collins">Woman in White by Wilkie Collins</option>
                                    <option value="Anatomy of a Murder by Robert Traver">Anatomy of a Murder by Robert Traver</option>
                                    <option value="Tinker, Tailor, Soldier, Spy by John le Carré">Tinker, Tailor, Soldier, Spy by John le Carré</option>
                                    <option value="The Da Vinci Code by Dan Brown">The Da Vinci Code by Dan Brown</option>
                                    <option value="All The Devils Are Here by Louise Penny">All The Devils Are Here by Louise Penny</option>
                                    <option value="The Beast Must Die by Nicholas Blake">The Beast Must Die by Nicholas Blake</option>
                                    <option value="The Mysterious Benedict Society by Trenton Lee Stewart">The Mysterious Benedict Society by Trenton Lee Stewart</option>
                                    <option value="The Box in the Woods by Maureen Johnson">The Box in the Woods by Maureen Johnson</option>
                                    <option value="You Were Never Here by Kathleen Peacock">You Were Never Here by Kathleen Peacock</option>
                                    <option value="One of Us is Lying by Karen M. McManus">One of Us is Lying by Karen M. McManus</option>
                                    <option value="The Cheerleaders by Kara Thomas">The Cheerleaders by Kara Thomas</option>
                                    <option value="People Like Us by Dana Mele">People Like Us by Dana Mele</option>
                                    <option value="The Loneliest Girl in the Universe by Lauren James">The Loneliest Girl in the Universe by Lauren James</option>
                                    <option value="Mondays Not Coming by Tiffany D. Jackson">Monday s Not Coming by Tiffany D. Jackson</option>
                                    <option value="If You re Out There by Katy Loutzenhiser">If You re Out There by Katy Loutzenhiser</option>
                                    <option value="Missing, Presumed Dead by Emma Berquist">Missing, Presumed Dead by Emma Berquist</option>
                                </select>
                                <label for="book4" class="form-label">FANTASY & WATTPAD</label> <br> 
                                <select id="book4"class="form-control" name="book4" >
                                    <option selected value="<?php echo $book4;?>"><?php echo $book4;?></option>
                                    <option value="none">none</option>
                                    <option value="Once Upon a Broken Heart by Stephanie Garber">Once Upon a Broken Heart by Stephanie Garber</option>
                                    <option value="The Eye of the World by Robert Jordan">The Eye of the World by Robert Jordan</option>
                                    <option value="The Way of Kings by Brandon Sanderson">The Way of Kings by Brandon Sanderson</option>
                                    <option value="The Fellowship of the Ring by J.R.R. Tolkien">The Fellowship of the Ring by J.R.R. Tolkien</option>
                                    <option value="Sourcery by Terry Pratchett">Sourcery by Terry Pratchett</option>
                                    <option value="Dune by Frank Herbert">Dune by Frank Herbert</option>
                                    <option value="The Fifth Season by N.K. Jemisin">The Fifth Season by N.K. Jemisin</option>
                                    <option value="The Name of the Wind by Patrick Rothfuss">The Name of the Wind by Patrick Rothfuss</option>
                                    <option value="The Lies of Locke Lamora by Scott Lynch">The Lies of Locke Lamora by Scott Lynch</option>
                                    <option value="Assassins Apprentice by Robin Hobb">Assassin's Apprentice by Robin Hobb</option>
                                    <option value="The Blade Itself by Joe Abercrombie">The Blade Itself by Joe Abercrombie</option>
                                    <option value="The Once and Future King by T.H. White">The Once and Future King by T.H. White</option>
                                    <option value="Redwall by Brian Jacques">Redwall by Brian Jacques</option>
                                    <option value="Gardens of the Moon by Steven Erikson">Gardens of the Moon by Steven Erikson</option>
                                    <option value="Jonathan Strange and Mr. Norrell by Susanna Clarke">Jonathan Strange and Mr. Norrell by Susanna Clarke</option>
                                    <option value="Perdido Street Station by China Miéville">Perdido Street Station by China Miéville</option>
                                    <option value="Harry Potter and the Sorcerer's Stone by J.K. Rowling">Harry Potter and the Sorcerer's Stone by J.K. Rowling</option>
                                    <option value="Sorcerer to the Crown by Zen Cho">Sorcerer to the Crown by Zen Cho</option>
                                    <option value="A Wizard of Earthsea by Ursula K. Le Guin">A Wizard of Earthsea by Ursula K. Le Guin</option>
                                    <option value="Who Fears Death by Nnedi Okorafor">Who Fears Death by Nnedi Okorafor</option>
                                    <option value="Taste of Sky by VentreCanard">Taste of Sky by VentreCanard</option>
                                    <option value="Chasing in the Wild by 4reuminct">Chasing in the Wild by 4reuminct</option>
                                    <option value="Tantei High (Erityian tribes) by Purpleyhan">Tantei High (Erityian tribes) by Purpleyhan</option>
                                    <option value="Just the Benefits by Beeyotch">Just the Benefits by Beeyotch</option>
                                    <option value="Possessive 1: Tyron Zapanta by CeCelib">Possessive 1: Tyron Zapanta by CeCelib</option>
                                    <option value="Why do you Hate Me by Jonaxx">Why do you Hate Me by Jonaxx</option>
                                    <option value="Sunburned Heart (Costa Leona Series #8) by Jonaxx">Sunburned Heart (Costa Leona Series #8) by Jonaxx</option>
                                    <option value="Ruling the Wild Waves (Costa Leona Series #7) by Jonaxx">Ruling the Wild Waves (Costa Leona Series #7) by Jonaxx</option>
                                    <option value="Chasing Hell by KnightInBlack">Chasing Hell by KnightInBlack</option>
                                    <option value="23:11 by Pilosopotasya">23:11 by Pilosopotasya</option>
                                    <option value="Titan Academy of Special Abilities by April Avery">Titan Academy of Special Abilities by April Avery</option>
                                    <option value="Project Loki (Volume 1) by AkoSiIbarra">Project Loki (Volume 1) by AkoSiIbarra</option>
                                    <option value="My Husband is a Mafia Boss by Yannalovesyouu">My Husband is a Mafia Boss by Yannalovesyouu</option>
                                    <option value="Just the Strings by Beeyotch">Just the Strings by Beeyotch</option>
                                    <option value="I love you, Ara by Serialsleeper">I love you, Ara by Serialsleeper</option>
                                    <option value="Hell University by KnightInBlack">Hell University by KnightInBlack</option>
                                    <option value="The Falling Game (EndMira: Ice) by Alyloony">The Falling Game (EndMira: Ice) by Alyloony</option>
                                    <option value="She who stole Cupid s Arrow by Alyloony">She who stole Cupid s Arrow by Alyloony</option>
                                    <option value="The Peculiar s Tale by AnakNiRizal">The Peculiars Tale by AnakNiRizal</option>
                                    <option value="AFGITMOLFM by Pilosopotasya">AFGITMOLFM by Pilosopotasya</option>
                                </select>                  
                            </div>
                        </div><!--end of books form-->
                        <div class="beverages_pastries_form">
                            <h2>BEVERAGES AND PASTRIES</h2>
                            <div class="form_left">
                                <label for="beverage1" class="form-label">COFFEE & FRAPPE</label> <br> 
                                <select id="beverage1"class="form-control" name="beverage1" >
                                    <option selected value="<?php echo $beverage1;?>"><?php echo $beverage1;?></option>
                                    <option value="none">none</option>
                                    <option value="Affogato Coffee">Affogato Coffee</option>
                                    <option value="Americano Coffee">Americano Coffee</option>
                                    <option value="Black Coffee">Black Coffee</option>
                                    <option value="Capuccino Coffee">Capuccino Coffee</option>
                                    <option value="Espresso Coffee">Espresso Coffee</option>
                                    <option value="Galao Coffee">Galao Coffee</option>
                                    <option value="Irish Coffee">Irish Coffee</option>
                                    <option value="Lungo Coffee">Lungo Coffee</option>
                                    <option value="Machiatto Coffee">Machiatto Coffee</option>
                                    <option value="Mocha Coffee">Mocha Coffee</option>
                                    <option value="Cajeta Frappe">Cajeta Frappe</option>
                                    <option value="Caramel Coffee Frappe">Caramel Coffee Frappe</option>
                                    <option value="Coffee Crumble">Coffee Crumble</option>
                                    <option value="Cookie Choco Frappe">Cookie Choco Frappe</option>
                                    <option value="Graham Cracker Frappe">Graham Cracker Frappe</option>
                                    <option value="Machiatto Vanilla Frappe">Machiatto Vanilla Frappe</option>
                                    <option value="Mango Flex Frappe">Mango Flex Frappe</option>
                                    <option value="Tripple Chocolate Frappe">Tripple Chocolate Frappe</option>
                                    <option value="Vanilla Caramel Frappe">Vanilla Caramel Frappe</option>
                                    <option value="Vanilla Frappe">Vanilla Frappe</option>
                                </select>
                                <label for="pastry1" class="form-label">BREAD</label> <br> 
                                <select id="pastry1"class="form-control" name="pastry1" >
                                    <option selected value="<?php echo $pastry1;?>"><?php echo $pastry1;?></option>
                                    <option value="none">none</option>
                                    <option value="Croissant">Croissant</option>
                                    <option value="Potato Bread">Potato Bread</option>
                                    <option value="Corn Bread">Corn Bread</option>
                                    <option value="Whole Wheat Bread">Whole Wheat Bread</option>
                                    <option value="Focaccia Bread">Focaccia Bread</option>
                                </select>
                            </div>
                            <div class="form_right">
                                <label for="beverage2" class="form-label">JUICE & MILKSHAKE</label> <br> 
                                <select id="beverage2"class="form-control" name="beverage2">
                                    <option selected value="<?php echo $beverage2;?>"><?php echo $beverage2;?></option>
                                    <option value="none">none</option>
                                    <option value="Blue Lemonade Juice">Blue Lemonade Juice</option>
                                    <option value="Calamansi Juice">Calamansi Juice</option>
                                    <option value="Ice Tea Juice">Ice Tea Juice</option>
                                    <option value="Kiwi Juice">Kiwi Juice</option>
                                    <option value="Lemon Juice">Lemon Juice</option>
                                    <option value="Mango Juice">Mango Juice</option>
                                    <option value="Mixed Fruit Juice">Mixed Fruit Juice</option>
                                    <option value="Orange Juice">Orange Juice</option>
                                    <option value="Pineapple Juice">Pineapple Juice</option>
                                    <option value="Pomelo Juice">Pomelo Juice</option>
                                    <option value="Avocado Milkshake">Avocado Milkshake</option>
                                    <option value="Blueberry Milkshake">Blueberry Milkshake</option>
                                    <option value="Caramel Milkshake">Caramel Milkshake</option>
                                    <option value="Chocolate Milkshake">Chocolate Milkshake</option>
                                    <option value="Coconut Milkshake">Coconut Milkshake</option>
                                    <option value="Coffee Milkshake">Coffee Milkshake</option>
                                    <option value="Mango Milkshake">Mango Milkshake</option>
                                    <option value="Peanut Butter Milkshake">Peanut Butter Milkshake</option>
                                    <option value="Smores Milkshake">Smores Milkshake</option>
                                    <option value="Strawberry Milkshake">Strawberry Milkshake</option>
                                </select>
                                <label for="pastry2" class="form-label">DESSERT</label> <br> 
                                <select id="pastry2"class="form-control" name="pastry2">
                                    <option selected value="<?php echo $pastry2;?>"> <?php echo $pastry2;?></option>
                                    <option value="none">none</option>
                                    <option value="Classic Chocolate">Classic Chocolate</option>
                                    <option value="Blueberry Cheesecake">Blueberry Cheesecake</option>
                                    <option value="Strawberry Cake">Strawberry Cake</option>
                                    <option value="Tiramisu">Tiramisu</option>
                                    <option value="Cinnamon Rolls">Cinnamon Rolls</option>
                                </select>
                            </div>
                        </div><!--end of beverages_pastries-->
                        <div class="status_form" >
                            <h2>STATUS</h2> <div class="form_left">
                                    <label for="admin_status" class="form-label" >Status</label> <br> 
                                    <select class="form-control" name="admin_status">
                                        <option selected value="<?php echo $admin_status;?>"><?php echo $admin_status;?></option>
                                        <option value="For approval">For approval</option>
                                        <option value="approved">Approved</option>
                                    </select>
                                    </div>
                                    <div class="form_right">
                                        <label for="admin_note" class="form-label">Note from Admin</label><br> 
                                        <input type="text" class="form-control" name="admin_note" value="<?php echo $admin_note;?>"><br> 
                                    </div>
                        </div><!--end of status form-->
                        <br> <br> <br> <br> <br> 
                        <button  class="submit_button" name="submit">UPDATE</button> <br>
                        </form>
