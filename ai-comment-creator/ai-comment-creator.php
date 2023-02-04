<?php


/**
 * Plugin Name:       AI Comment Creator
 * Plugin URI:        https://aicontentgenerator.app
 * Description:       GPT-3 powered comment creator for WordPress.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Berk Birkan
 * Author URI:        https://berkbirkan.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       ai-comment-creator
 * Domain Path:       /languages
 */


 /*

 GNU GENERAL PUBLIC LICENSE
                       Version 3, 29 June 2007

 Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.

                            Preamble

  The GNU General Public License is a free, copyleft license for
software and other kinds of works.

  The licenses for most software and other practical works are designed
to take away your freedom to share and change the works.  By contrast,
the GNU General Public License is intended to guarantee your freedom to
share and change all versions of a program--to make sure it remains free
software for all its users.  We, the Free Software Foundation, use the
GNU General Public License for most of our software; it applies also to
any other work released this way by its authors.  You can apply it to
your programs, too.

  When we speak of free software, we are referring to freedom, not
price.  Our General Public Licenses are designed to make sure that you
have the freedom to distribute copies of free software (and charge for
them if you wish), that you receive source code or can get it if you
want it, that you can change the software or use pieces of it in new
free programs, and that you know you can do these things.

  To protect your rights, we need to prevent others from denying you
these rights or asking you to surrender the rights.  Therefore, you have
certain responsibilities if you distribute copies of the software, or if
you modify it: responsibilities to respect the freedom of others.

  For example, if you distribute copies of such a program, whether
gratis or for a fee, you must pass on to the recipients the same
freedoms that you received.  You must make sure that they, too, receive
or can get the source code.  And you must show them these terms so they
know their rights.

  Developers that use the GNU GPL protect your rights with two steps:
(1) assert copyright on the software, and (2) offer you this License
giving you legal permission to copy, distribute and/or modify it.

  For the developers' and authors' protection, the GPL clearly explains
that there is no warranty for this free software.  For both users' and
authors' sake, the GPL requires that modified versions be marked as
changed, so that their problems will not be attributed erroneously to
authors of previous versions.

  Some devices are designed to deny users access to install or run
modified versions of the software inside them, although the manufacturer
can do so.  This is fundamentally incompatible with the aim of
protecting users' freedom to change the software.  The systematic
pattern of such abuse occurs in the area of products for individuals to
use, which is precisely where it is most unacceptable.  Therefore, we
have designed this version of the GPL to prohibit the practice for those
products.  If such problems arise substantially in other domains, we
stand ready to extend this provision to those domains in future versions
of the GPL, as needed to protect the freedom of users.

  Finally, every program is threatened constantly by software patents.
States should not allow patents to restrict development and use of
software on general-purpose computers, but in those that do, we wish to
avoid the special danger that patents applied to a free program could
make it effectively proprietary.  To prevent this, the GPL assures that
patents cannot be used to render the program non-free.

  The precise terms and conditions for copying, distribution and
modification follow.

                       TERMS AND CONDITIONS

  0. Definitions.

  "This License" refers to version 3 of the GNU General Public License.

  "Copyright" also means copyright-like laws that apply to other kinds of
works, such as semiconductor masks.

  "The Program" refers to any copyrightable work licensed under this
License.  Each licensee is addressed as "you".  "Licensees" and
"recipients" may be individuals or organizations.

  To "modify" a work means to copy from or adapt all or part of the work
in a fashion requiring copyright permission, other than the making of an
exact copy.  The resulting work is called a "modified version" of the
earlier work or a work "based on" the earlier work.

  A "covered work" means either the unmodified Program or a work based
on the Program.

  To "propagate" a work means to do anything with it that, without
permission, would make you directly or secondarily liable for
infringement under applicable copyright law, except executing it on a
computer or modifying a private copy.  Propagation includes copying,
distribution (with or without modification), making available to the
public, and in some countries other activities as well.

  To "convey" a work means any kind of propagation that enables other
parties to make or receive copies.  Mere interaction with a user through
a computer network, with no transfer of a copy, is not conveying.

  An interactive user interface displays "Appropriate Legal Notices"
to the extent that it includes a convenient and prominently visible
feature that (1) displays an appropriate copyright notice, and (2)
tells the user that there is no warranty for the work (except to the
extent that warranties are provided), that licensees may convey the
work under this License, and how to view a copy of this License.  If
the interface presents a list of user commands or options, such as a
menu, a prominent item in the list meets this criterion.

  1. Source Code.

  The "source code" for a work means the preferred form of the work
for making modifications to it.  "Object code" means any non-source
form of a work.

  A "Standard Interface" means an interface that either is an official
standard defined by a recognized standards body, or, in the case of
interfaces specified for a particular programming language, one that
is widely used among developers working in that language.

  The "System Libraries" of an executable work include anything, other
than the work as a whole, that (a) is included in the normal form of
packaging a Major Component, but which is not part of that Major
Component, and (b) serves only to enable use of the work with that
Major Component, or to implement a Standard Interface for which an
implementation is available to the public in source code form.  A
"Major Component", in this context, means a major essential component
(kernel, window system, and so on) of the specific operating system
(if any) on which the executable work runs, or a compiler used to
produce the work, or an object code interpreter used to run it.

  The "Corresponding Source" for a work in object code form means all
the source code needed to generate, install, and (for an executable
work) run the object code and to modify the work, including scripts to
control those activities.  However, it does not include the work's
System Libraries, or general-purpose tools or generally available free
programs which are used unmodified in performing those activities but
which are not part of the work.  For example, Corresponding Source
includes interface definition files associated with source files for
the work, and the source code for shared libraries and dynamically
linked subprograms that the work is specifically designed to require,
such as by intimate data communication or control flow between those
subprograms and other parts of the work.

  The Corresponding Source need not include anything that users
can regenerate automatically from other parts of the Corresponding
Source.

  The Corresponding Source for a work in source code form is that
same work.

  2. Basic Permissions.

  All rights granted under this License are granted for the term of
copyright on the Program, and are irrevocable provided the stated
conditions are met.  This License explicitly affirms your unlimited
permission to run the unmodified Program.  The output from running a
covered work is covered by this License only if the output, given its
content, constitutes a covered work.  This License acknowledges your
rights of fair use or other equivalent, as provided by copyright law.

  You may make, run and propagate covered works that you do not
convey, without conditions so long as your license otherwise remains
in force.  You may convey covered works to others for the sole purpose
of having them make modifications exclusively for you, or provide you
with facilities for running those works, provided that you comply with
the terms of this License in conveying all material for which you do
not control copyright.  Those thus making or running the covered works
for you must do so exclusively on your behalf, under your direction
and control, on terms that prohibit them from making any copies of
your copyrighted material outside their relationship with you.

  Conveying under any other circumstances is permitted solely under
the conditions stated below.  Sublicensing is not allowed; section 10
makes it unnecessary.

  3. Protecting Users' Legal Rights From Anti-Circumvention Law.

  No covered work shall be deemed part of an effective technological
measure under any applicable law fulfilling obligations under article
11 of the WIPO copyright treaty adopted on 20 December 1996, or
similar laws prohibiting or restricting circumvention of such
measures.

  When you convey a covered work, you waive any legal power to forbid
circumvention of technological measures to the extent such circumvention
is effected by exercising rights under this License with respect to
the covered work, and you disclaim any intention to limit operation or
modification of the work as a means of enforcing, against the work's
users, your or third parties' legal rights to forbid circumvention of
technological measures.

  4. Conveying Verbatim Copies.

  You may convey verbatim copies of the Program's source code as you
receive it, in any medium, provided that you conspicuously and
appropriately publish on each copy an appropriate copyright notice;
keep intact all notices stating that this License and any
non-permissive terms added in accord with section 7 apply to the code;
keep intact all notices of the absence of any warranty; and give all
recipients a copy of this License along with the Program.

  You may charge any price or no price for each copy that you convey,
and you may offer support or warranty protection for a fee.

  5. Conveying Modified Source Versions.

  You may convey a work based on the Program, or the modifications to
produce it from the Program, in the form of source code under the
terms of section 4, provided that you also meet all of these conditions:

    a) The work must carry prominent notices stating that you modified
    it, and giving a relevant date.

    b) The work must carry prominent notices stating that it is
    released under this License and any conditions added under section
    7.  This requirement modifies the requirement in section 4 to
    "keep intact all notices".

    c) You must license the entire work, as a whole, under this
    License to anyone who comes into possession of a copy.  This
    License will therefore apply, along with any applicable section 7
    additional terms, to the whole of the work, and all its parts,
    regardless of how they are packaged.  This License gives no
    permission to license the work in any other way, but it does not
    invalidate such permission if you have separately received it.

    d) If the work has interactive user interfaces, each must display
    Appropriate Legal Notices; however, if the Program has interactive
    interfaces that do not display Appropriate Legal Notices, your
    work need not make them do so.

  A compilation of a covered work with other separate and independent
works, which are not by their nature extensions of the covered work,
and which are not combined with it such as to form a larger program,
in or on a volume of a storage or distribution medium, is called an
"aggregate" if the compilation and its resulting copyright are not
used to limit the access or legal rights of the compilation's users
beyond what the individual works permit.  Inclusion of a covered work
in an aggregate does not cause this License to apply to the other
parts of the aggregate.

  6. Conveying Non-Source Forms.

  You may convey a covered work in object code form under the terms
of sections 4 and 5, provided that you also convey the
machine-readable Corresponding Source under the terms of this License,
in one of these ways:

    a) Convey the object code in, or embodied in, a physical product
    (including a physical distribution medium), accompanied by the
    Corresponding Source fixed on a durable physical medium
    customarily used for software interchange.

    b) Convey the object code in, or embodied in, a physical product
    (including a physical distribution medium), accompanied by a
    written offer, valid for at least three years and valid for as
    long as you offer spare parts or customer support for that product
    model, to give anyone who possesses the object code either (1) a
    copy of the Corresponding Source for all the software in the
    product that is covered by this License, on a durable physical
    medium customarily used for software interchange, for a price no
    more than your reasonable cost of physically performing this
    conveying of source, or (2) access to copy the
    Corresponding Source from a network server at no charge.

    c) Convey individual copies of the object code with a copy of the
    written offer to provide the Corresponding Source.  This
    alternative is allowed only occasionally and noncommercially, and
    only if you received the object code with such an offer, in accord
    with subsection 6b.

    d) Convey the object code by offering access from a designated
    place (gratis or for a charge), and offer equivalent access to the
    Corresponding Source in the same way through the same place at no
    further charge.  You need not require recipients to copy the
    Corresponding Source along with the object code.  If the place to
    copy the object code is a network server, the Corresponding Source
    may be on a different server (operated by you or a third party)
    that supports equivalent copying facilities, provided you maintain
    clear directions next to the object code saying where to find the
    Corresponding Source.  Regardless of what server hosts the
    Corresponding Source, you remain obligated to ensure that it is
    available for as long as needed to satisfy these requirements.

    e) Convey the object code using peer-to-peer transmission, provided
    you inform other peers where the object code and Corresponding
    Source of the work are being offered to the general public at no
    charge under subsection 6d.

  A separable portion of the object code, whose source code is excluded
from the Corresponding Source as a System Library, need not be
included in conveying the object code work.

  A "User Product" is either (1) a "consumer product", which means any
tangible personal property which is normally used for personal, family,
or household purposes, or (2) anything designed or sold for incorporation
into a dwelling.  In determining whether a product is a consumer product,
doubtful cases shall be resolved in favor of coverage.  For a particular
product received by a particular user, "normally used" refers to a
typical or common use of that class of product, regardless of the status
of the particular user or of the way in which the particular user
actually uses, or expects or is expected to use, the product.  A product
is a consumer product regardless of whether the product has substantial
commercial, industrial or non-consumer uses, unless such uses represent
the only significant mode of use of the product.

  "Installation Information" for a User Product means any methods,
procedures, authorization keys, or other information required to install
and execute modified versions of a covered work in that User Product from
a modified version of its Corresponding Source.  The information must
suffice to ensure that the continued functioning of the modified object
code is in no case prevented or interfered with solely because
modification has been made.

  If you convey an object code work under this section in, or with, or
specifically for use in, a User Product, and the conveying occurs as
part of a transaction in which the right of possession and use of the
User Product is transferred to the recipient in perpetuity or for a
fixed term (regardless of how the transaction is characterized), the
Corresponding Source conveyed under this section must be accompanied
by the Installation Information.  But this requirement does not apply
if neither you nor any third party retains the ability to install
modified object code on the User Product (for example, the work has
been installed in ROM).

  The requirement to provide Installation Information does not include a
requirement to continue to provide support service, warranty, or updates
for a work that has been modified or installed by the recipient, or for
the User Product in which it has been modified or installed.  Access to a
network may be denied when the modification itself materially and
adversely affects the operation of the network or violates the rules and
protocols for communication across the network.

  Corresponding Source conveyed, and Installation Information provided,
in accord with this section must be in a format that is publicly
documented (and with an implementation available to the public in
source code form), and must require no special password or key for
unpacking, reading or copying.

  7. Additional Terms.

  "Additional permissions" are terms that supplement the terms of this
License by making exceptions from one or more of its conditions.
Additional permissions that are applicable to the entire Program shall
be treated as though they were included in this License, to the extent
that they are valid under applicable law.  If additional permissions
apply only to part of the Program, that part may be used separately
under those permissions, but the entire Program remains governed by
this License without regard to the additional permissions.

  When you convey a copy of a covered work, you may at your option
remove any additional permissions from that copy, or from any part of
it.  (Additional permissions may be written to require their own
removal in certain cases when you modify the work.)  You may place
additional permissions on material, added by you to a covered work,
for which you have or can give appropriate copyright permission.

  Notwithstanding any other provision of this License, for material you
add to a covered work, you may (if authorized by the copyright holders of
that material) supplement the terms of this License with terms:

    a) Disclaiming warranty or limiting liability differently from the
    terms of sections 15 and 16 of this License; or

    b) Requiring preservation of specified reasonable legal notices or
    author attributions in that material or in the Appropriate Legal
    Notices displayed by works containing it; or

    c) Prohibiting misrepresentation of the origin of that material, or
    requiring that modified versions of such material be marked in
    reasonable ways as different from the original version; or

    d) Limiting the use for publicity purposes of names of licensors or
    authors of the material; or

    e) Declining to grant rights under trademark law for use of some
    trade names, trademarks, or service marks; or

    f) Requiring indemnification of licensors and authors of that
    material by anyone who conveys the material (or modified versions of
    it) with contractual assumptions of liability to the recipient, for
    any liability that these contractual assumptions directly impose on
    those licensors and authors.

  All other non-permissive additional terms are considered "further
restrictions" within the meaning of section 10.  If the Program as you
received it, or any part of it, contains a notice stating that it is
governed by this License along with a term that is a further
restriction, you may remove that term.  If a license document contains
a further restriction but permits relicensing or conveying under this
License, you may add to a covered work material governed by the terms
of that license document, provided that the further restriction does
not survive such relicensing or conveying.

  If you add terms to a covered work in accord with this section, you
must place, in the relevant source files, a statement of the
additional terms that apply to those files, or a notice indicating
where to find the applicable terms.

  Additional terms, permissive or non-permissive, may be stated in the
form of a separately written license, or stated as exceptions;
the above requirements apply either way.

  8. Termination.

  You may not propagate or modify a covered work except as expressly
provided under this License.  Any attempt otherwise to propagate or
modify it is void, and will automatically terminate your rights under
this License (including any patent licenses granted under the third
paragraph of section 11).

  However, if you cease all violation of this License, then your
license from a particular copyright holder is reinstated (a)
provisionally, unless and until the copyright holder explicitly and
finally terminates your license, and (b) permanently, if the copyright
holder fails to notify you of the violation by some reasonable means
prior to 60 days after the cessation.

  Moreover, your license from a particular copyright holder is
reinstated permanently if the copyright holder notifies you of the
violation by some reasonable means, this is the first time you have
received notice of violation of this License (for any work) from that
copyright holder, and you cure the violation prior to 30 days after
your receipt of the notice.

  Termination of your rights under this section does not terminate the
licenses of parties who have received copies or rights from you under
this License.  If your rights have been terminated and not permanently
reinstated, you do not qualify to receive new licenses for the same
material under section 10.

  9. Acceptance Not Required for Having Copies.

  You are not required to accept this License in order to receive or
run a copy of the Program.  Ancillary propagation of a covered work
occurring solely as a consequence of using peer-to-peer transmission
to receive a copy likewise does not require acceptance.  However,
nothing other than this License grants you permission to propagate or
modify any covered work.  These actions infringe copyright if you do
not accept this License.  Therefore, by modifying or propagating a
covered work, you indicate your acceptance of this License to do so.

  10. Automatic Licensing of Downstream Recipients.

  Each time you convey a covered work, the recipient automatically
receives a license from the original licensors, to run, modify and
propagate that work, subject to this License.  You are not responsible
for enforcing compliance by third parties with this License.

  An "entity transaction" is a transaction transferring control of an
organization, or substantially all assets of one, or subdividing an
organization, or merging organizations.  If propagation of a covered
work results from an entity transaction, each party to that
transaction who receives a copy of the work also receives whatever
licenses to the work the party's predecessor in interest had or could
give under the previous paragraph, plus a right to possession of the
Corresponding Source of the work from the predecessor in interest, if
the predecessor has it or can get it with reasonable efforts.

  You may not impose any further restrictions on the exercise of the
rights granted or affirmed under this License.  For example, you may
not impose a license fee, royalty, or other charge for exercise of
rights granted under this License, and you may not initiate litigation
(including a cross-claim or counterclaim in a lawsuit) alleging that
any patent claim is infringed by making, using, selling, offering for
sale, or importing the Program or any portion of it.

  11. Patents.

  A "contributor" is a copyright holder who authorizes use under this
License of the Program or a work on which the Program is based.  The
work thus licensed is called the contributor's "contributor version".

  A contributor's "essential patent claims" are all patent claims
owned or controlled by the contributor, whether already acquired or
hereafter acquired, that would be infringed by some manner, permitted
by this License, of making, using, or selling its contributor version,
but do not include claims that would be infringed only as a
consequence of further modification of the contributor version.  For
purposes of this definition, "control" includes the right to grant
patent sublicenses in a manner consistent with the requirements of
this License.

  Each contributor grants you a non-exclusive, worldwide, royalty-free
patent license under the contributor's essential patent claims, to
make, use, sell, offer for sale, import and otherwise run, modify and
propagate the contents of its contributor version.

  In the following three paragraphs, a "patent license" is any express
agreement or commitment, however denominated, not to enforce a patent
(such as an express permission to practice a patent or covenant not to
sue for patent infringement).  To "grant" such a patent license to a
party means to make such an agreement or commitment not to enforce a
patent against the party.

  If you convey a covered work, knowingly relying on a patent license,
and the Corresponding Source of the work is not available for anyone
to copy, free of charge and under the terms of this License, through a
publicly available network server or other readily accessible means,
then you must either (1) cause the Corresponding Source to be so
available, or (2) arrange to deprive yourself of the benefit of the
patent license for this particular work, or (3) arrange, in a manner
consistent with the requirements of this License, to extend the patent
license to downstream recipients.  "Knowingly relying" means you have
actual knowledge that, but for the patent license, your conveying the
covered work in a country, or your recipient's use of the covered work
in a country, would infringe one or more identifiable patents in that
country that you have reason to believe are valid.

  If, pursuant to or in connection with a single transaction or
arrangement, you convey, or propagate by procuring conveyance of, a
covered work, and grant a patent license to some of the parties
receiving the covered work authorizing them to use, propagate, modify
or convey a specific copy of the covered work, then the patent license
you grant is automatically extended to all recipients of the covered
work and works based on it.

  A patent license is "discriminatory" if it does not include within
the scope of its coverage, prohibits the exercise of, or is
conditioned on the non-exercise of one or more of the rights that are
specifically granted under this License.  You may not convey a covered
work if you are a party to an arrangement with a third party that is
in the business of distributing software, under which you make payment
to the third party based on the extent of your activity of conveying
the work, and under which the third party grants, to any of the
parties who would receive the covered work from you, a discriminatory
patent license (a) in connection with copies of the covered work
conveyed by you (or copies made from those copies), or (b) primarily
for and in connection with specific products or compilations that
contain the covered work, unless you entered into that arrangement,
or that patent license was granted, prior to 28 March 2007.

  Nothing in this License shall be construed as excluding or limiting
any implied license or other defenses to infringement that may
otherwise be available to you under applicable patent law.

  12. No Surrender of Others' Freedom.

  If conditions are imposed on you (whether by court order, agreement or
otherwise) that contradict the conditions of this License, they do not
excuse you from the conditions of this License.  If you cannot convey a
covered work so as to satisfy simultaneously your obligations under this
License and any other pertinent obligations, then as a consequence you may
not convey it at all.  For example, if you agree to terms that obligate you
to collect a royalty for further conveying from those to whom you convey
the Program, the only way you could satisfy both those terms and this
License would be to refrain entirely from conveying the Program.

  13. Use with the GNU Affero General Public License.

  Notwithstanding any other provision of this License, you have
permission to link or combine any covered work with a work licensed
under version 3 of the GNU Affero General Public License into a single
combined work, and to convey the resulting work.  The terms of this
License will continue to apply to the part which is the covered work,
but the special requirements of the GNU Affero General Public License,
section 13, concerning interaction through a network will apply to the
combination as such.

  14. Revised Versions of this License.

  The Free Software Foundation may publish revised and/or new versions of
the GNU General Public License from time to time.  Such new versions will
be similar in spirit to the present version, but may differ in detail to
address new problems or concerns.

  Each version is given a distinguishing version number.  If the
Program specifies that a certain numbered version of the GNU General
Public License "or any later version" applies to it, you have the
option of following the terms and conditions either of that numbered
version or of any later version published by the Free Software
Foundation.  If the Program does not specify a version number of the
GNU General Public License, you may choose any version ever published
by the Free Software Foundation.

  If the Program specifies that a proxy can decide which future
versions of the GNU General Public License can be used, that proxy's
public statement of acceptance of a version permanently authorizes you
to choose that version for the Program.

  Later license versions may give you additional or different
permissions.  However, no additional obligations are imposed on any
author or copyright holder as a result of your choosing to follow a
later version.

  15. Disclaimer of Warranty.

  THERE IS NO WARRANTY FOR THE PROGRAM, TO THE EXTENT PERMITTED BY
APPLICABLE LAW.  EXCEPT WHEN OTHERWISE STATED IN WRITING THE COPYRIGHT
HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM "AS IS" WITHOUT WARRANTY
OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
PURPOSE.  THE ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM
IS WITH YOU.  SHOULD THE PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF
ALL NECESSARY SERVICING, REPAIR OR CORRECTION.

  16. Limitation of Liability.

  IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING
WILL ANY COPYRIGHT HOLDER, OR ANY OTHER PARTY WHO MODIFIES AND/OR CONVEYS
THE PROGRAM AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY
GENERAL, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE
USE OR INABILITY TO USE THE PROGRAM (INCLUDING BUT NOT LIMITED TO LOSS OF
DATA OR DATA BEING RENDERED INACCURATE OR LOSSES SUSTAINED BY YOU OR THIRD
PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH ANY OTHER PROGRAMS),
EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY OF
SUCH DAMAGES.

  17. Interpretation of Sections 15 and 16.

  If the disclaimer of warranty and limitation of liability provided
above cannot be given local legal effect according to their terms,
reviewing courts shall apply local law that most closely approximates
an absolute waiver of all civil liability in connection with the
Program, unless a warranty or assumption of liability accompanies a
copy of the Program in return for a fee.

                     END OF TERMS AND CONDITIONS

            How to Apply These Terms to Your New Programs

  If you develop a new program, and you want it to be of the greatest
possible use to the public, the best way to achieve this is to make it
free software which everyone can redistribute and change under these terms.

  To do so, attach the following notices to the program.  It is safest
to attach them to the start of each source file to most effectively
state the exclusion of warranty; and each file should have at least
the "copyright" line and a pointer to where the full notice is found.

    <one line to give the program's name and a brief idea of what it does.>
    Copyright (C) <year>  <name of author>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.

Also add information on how to contact you by electronic and paper mail.

  If the program does terminal interaction, make it output a short
notice like this when it starts in an interactive mode:

    <program>  Copyright (C) <year>  <name of author>
    This program comes with ABSOLUTELY NO WARRANTY; for details type `show w'.
    This is free software, and you are welcome to redistribute it
    under certain conditions; type `show c' for details.

The hypothetical commands `show w' and `show c' should show the appropriate
parts of the General Public License.  Of course, your program's commands
might be different; for a GUI interface, you would use an "about box".

  You should also get your employer (if you work as a programmer) or school,
if any, to sign a "copyright disclaimer" for the program, if necessary.
For more information on this, and how to apply and follow the GNU GPL, see
<https://www.gnu.org/licenses/>.

  The GNU General Public License does not permit incorporating your program
into proprietary programs.  If your program is a subroutine library, you
may consider it more useful to permit linking proprietary applications with
the library.  If this is what you want to do, use the GNU Lesser General
Public License instead of this License.  But first, please read
<https://www.gnu.org/licenses/why-not-lgpl.html>.

 */



function aicommentcreator_enqueue_scripts() {
  $my_plugin_dir = plugin_dir_url(__FILE__);

  wp_register_script( 'aicontentgenerator',$my_plugin_dir.'/js/aicontentgenerator.js' , array(), false, true );
  wp_enqueue_script( 'aicontentgenerator' );
  wp_register_script( 'aicommentcreator_jquery',$my_plugin_dir.'/js/jquery.min.js' , array(), false, true );
  wp_enqueue_script( 'aicommentcreator_jquery' );





}
add_action( 'admin_enqueue_scripts', 'aicommentcreator_enqueue_scripts' );



 function aicommentcreator_enqueue_styles(){
   $my_plugin_dir = plugin_dir_url(__FILE__);
   wp_register_style('aicommentcreator_bootstrap', $my_plugin_dir.'/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('aicommentcreator_bootstrap');

    wp_register_style('aicommentcreator_loader', $my_plugin_dir.'/css/loader.css', array(), 1);    
    wp_enqueue_style('aicommentcreator_loader');

  }
  
  add_action('admin_print_styles','aicommentcreator_enqueue_styles');


function aicommentcreator_addComment_setOptions(){

 

    
    if($_POST){

  

      

      $received_data = array(
        "comment_approved" => "1",
        "comment_post_ID" =>  $_POST["select_posts"],
        "comment_author" => $_POST["comment_fullname"],
        "comment_author_email" => $_POST["comment_email"],
        "comment_content" => $_POST["comment_content"],

        
      );



      $comment_result = wp_insert_comment($received_data);

      // Check if user want to add avatar
      if($_POST["avatar_url"] != ""){
      add_comment_meta($comment_result, 'avatar_url', $_POST['avatar_url']);
        }


      if($comment_result != false){
        $result=__('<div class="alert alert-success">Your comment successfully posted! Comment ID:'. $comment_result .'</div>', 'ai-comment-creator');
      }else{
      $result = __('<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>', 'ai-comment-creator');
      }

      echo $result;
        
    }
}

function aicommentcreator_automaticComment_setOptions(){
    
    
    if($_POST){

      
      

       
      $received_data = array(
        "aicommentcreator_categories" => $_POST["select_categories"],
        "aicommentcreator_time_type" => $_POST["select_time_type"],
        "aicommentcreator_time" => $_POST["time_value"],
        "aicommentcreator_comment_language" => $_POST["select_language"],
        "aicommentcreator_max_token" => $_POST["max_token"],
        "aicommentcreator_comment_prompt" => $_POST["comment_prompt"],
        "automatic_status" => $_POST["automatic_status"],
        "select_avatar" => $_POST["select_avatar"],

        

      );
      $save = serialize($received_data);
  
      update_option('aicommentcreator_autocomment_settings',$save,"yes");

      if( !wp_next_scheduled( 'autocomment' ) ) {  
        wp_schedule_event( time(), 'autocomment_time', 'autocomment' );  
     }else{
        wp_clear_scheduled_hook( 'autocomment' );
        wp_schedule_event( time(), 'autocomment_time', 'autocomment' );
     }

    
      if($save != false){
        $result=__('<div class="alert alert-success">Your settings successfully saved!</div>', 'ai-comment-creator');
      }else{
        $result=__('<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>', 'ai-comment-creator');
      }

      

      echo $result;
    }
}


function aicommentcreator_get_last_post_by_category($category_ids,$post_count) {
  $args = array(
      'posts_per_page' => $post_count,
      'category__in' => $category_ids,
      'orderby' => 'date',
      'order' => 'DESC'
  );
  $posts = get_posts($args);

  return $posts;
}


function aicommentcreator_get_user_info($json_data) {
  $data = json_decode($json_data, true);
  $user = $data["results"][0];
  $name = $user["name"]["first"];
  $last_name = $user["name"]["last"];
  $email = $user["email"];
  $user_avatar = $user["picture"]["large"];
  $user_avatar_thumbnail = $user["picture"]["thumbnail"];
  return array("name" => $name, "last_name" => $last_name, "email" => $email, "user_avatar" => $user_avatar, "user_avatar_thumbnail" => $user_avatar_thumbnail);
}

function aicommentcreator_parseHTML($string) {
  $string = preg_replace('/<[^>]*>/', '', $string);
  return $string;
}


function aicommentcreator_custom_avatar($avatar, $id_or_email, $size, $default, $alt) {
  $comment = get_comment($id_or_email);
  $comment_id = $comment->comment_ID;
  $avatar_url = get_comment_meta($comment_id, 'avatar_url', true);

  if (!empty($avatar_url)) {
    $custom_avatar = $avatar_url;
  } else {
    $custom_avatar = get_avatar_url($id_or_email);
  }
  return "<img src='" . $custom_avatar . "' alt='" . $alt . "' height='" . $size . "' width='" . $size . "' srcset='". $custom_avatar  . " 2x' class='avatar avatar-40 photo wp-block-avatar__image ' height='40' width='40'  style=border-radius: 20px' loading='lazy' decoding='async'/>";
  

}

add_filter('get_avatar', 'aicommentcreator_custom_avatar', 10, 5); 


function aicommentcreator_generate_comment_with_aicontentgenerator($domain_name,$prompt,$blog_post,$max_token){
  $final_prompt = $prompt . ' " ' . $blog_post . ' " ';

  $url = 'https://www.aicontentgenerator.app/api/generateCommentJS';

  $data = array(
      'userDomain' => $domain_name,
      'maxToken' => $max_token,
      'prompt' => $final_prompt
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_POST, 1);

  $headers = array();
  $headers[] = 'Content-Type: application/json';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error: ' . curl_error($ch);
  }
  curl_close($ch);

  $responseData = json_decode($result, true);
  $text = $responseData['choices'][0]['text'];
  return "AICONTENTGENERATOR API   : " . $text;
  

/*
$final_prompt = $prompt . ' :  " ' . $blog_post . ' " ';

$final_prompt = aicommentcreator_parseHTML($final_prompt);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.aicontentgenerator.app/api/generateCommentJS");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "userDomain=$domain_name&maxToken=$max_token&prompt=$final_prompt");
curl_setopt($ch, CURLOPT_POST, 1);

$response = curl_exec($ch);
if (curl_errno($ch)) {
    return curl_error($ch);
}
curl_close ($ch);

$result = json_decode($response, true);
return "AICONTENTGENERATOR API : " .$response .$result["choices"][0]["text"]; */



  

}



function aicommentcreator_generate_comment_with_openai($aicommentcreator_apikey, $api_key, $prompt, $blog_post, $max_token) {

  $final_prompt = $prompt . ' " ' . $blog_post . ' " ';

  $url = 'https://aicontentgenerator.app/api/generateCommentOpenAI';

  $data = array(
      'aicommentcreator_apikey' => $aicommentcreator_apikey,
      'openai_apikey' => $api_key,
      'maxToken' => $max_token,
      'prompt' => $final_prompt
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
  curl_setopt($ch, CURLOPT_POST, 1);

  $headers = array();
  $headers[] = 'Content-Type: application/json';
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error: ' . curl_error($ch);
  }
  curl_close($ch);

  $responseData = json_decode($result, true);
  $text = $responseData['choices'][0]['text'];
  return "OPENAI  : " . $text;

}






//CRONJOB START

// unschedule event upon plugin deactivation
function aicommentcreator_cronstarter_deactivate() {	
	// find out when the last event was scheduled
	$timestamp = wp_next_scheduled ('autocomment');
	// unschedule previous event if any
	wp_unschedule_event ($timestamp, 'autocomment');
} 
register_deactivation_hook (__FILE__, 'aicommentcreator_cronstarter_deactivate');

//Register AIContentGenerator API with Domain
function aicommentcreator_register_to_aicontentgenerator() {
  // Do something when plugin is activated
  //Register with Domain

  $site_url = get_site_url();

  $curl = curl_init();



curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://aicontentgenerator.app/api/registerNewDomain?userDomain=' . $site_url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);



}




register_activation_hook( __FILE__, 'aicommentcreator_register_to_aicontentgenerator' );




function aicommentcreator_cronjob_setAutoComment(){
  $settings = unserialize(get_option('aicommentcreator_autocomment_settings'));

  if ($settings['automatic_status'] == 1) {
    //Start Auto Commenting
    aicommentcreator_cronjob_auto_comment();
  }

}



// here's the function we'd like to call with our cron job
function aicommentcreator_cronjob_auto_comment() {

  //Check if user have a enough credits in AIContentGenerator

  $credit = (int) get_user_from_aicontentgenerator_api()["user_token"];
  
	
	//Get Options

  $selected_categories = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_categories"];
  $selected_language = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_comment_language"];
  $api_key = unserialize(get_option("aicommentcreator_settings"))["aicommentcreator_settings_apikey"];
  $max_token = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_max_token"];
  $has_avatar = unserialize(get_option("aicommentcreator_autocomment_settings"))["select_avatar"];
  $aicommentcreator_apikey = get_site_url();

  


  //Get last 5 post  by selected categories
  $posts_selected= aicommentcreator_get_last_post_by_category($selected_categories,5);

  //Randomly select a post
  $random_post = $posts_selected[array_rand($posts_selected)];

  //Create author info
  $json_data = file_get_contents("https://randomuser.me/api?nat=".$selected_language);
  $user_info = aicommentcreator_get_user_info($json_data);
  
  //Get comment prompt
  if(unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_comment_prompt"] != ""){
    $prompt = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_comment_prompt"];
  }else{
    $prompt = "Please write a comment about the following blog post: ";
  }


  $domain_name = get_site_url();

  //Create comment content with AIContentGenerator API or OpenAI

  if($credit < $max_token){
    //Generate comment with OpenAI
    $comment_content = aicommentcreator_generate_comment_with_openai($aicommentcreator_apikey,$api_key, $prompt, $random_post->post_content,$max_token);

  }else{
    //Generate comment with AIContentGenerator API
    $comment_content = aicommentcreator_generate_comment_with_aicontentgenerator($domain_name, $prompt, $random_post->post_content, $max_token);

  }

  
  



  $received_data = array(
    "comment_approved" => "1",
    "comment_post_ID" =>  $random_post->ID,
    "comment_author" => $user_info["name"] . " " . $user_info["last_name"],
    "comment_author_email" => $user_info["email"],
    "comment_content" => $comment_content,
  );
  
  if($comment_content != ""){
    $comment_id = wp_insert_comment($received_data);
    // Check if user want to add avatar
    if($has_avatar == 1){
      add_comment_meta($comment_id, 'avatar_url', $user_info['user_avatar']);
    }
   
  }
  

	
}

// hook that function onto our scheduled event:
add_action ('autocomment', 'aicommentcreator_cronjob_setAutoComment'); 

// add custom interval
function aicommentcreator_cron_add_minute( $schedules ) {

  $selected_time_type = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_time_type"];
  $selected_time = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_time"];
  $display_str = "Once Every " . $selected_time;
  
  switch($selected_time_type){
    case "1":
      $selected_time = $selected_time * 60 * 60;
      $type_str = "Hour";
    break;
    
    case "2":
      $selected_time = $selected_time * 60 * 60 * 24;
      $type_str = "Day";
    break;

    case "3":
      $selected_time = $selected_time * 60 * 60 * 24 * 7;
      $type_str = "Week";
    break;

    case "4":
      $selected_time = $selected_time * 60 * 60 * 24 * 30;
      $type_str = "Month";
    break;

    case "5":
      $selected_time = $selected_time * 60;
      $type_str = "Minute";

   
  }
  $display_str = $display_str. " " . $type_str ;
	// Adds once every minute to the existing schedules. 
    $schedules['autocomment_time'] = array(
	    'interval' => $selected_time,
	    'display' => __( $display_str )
    );
    return $schedules;
}
add_filter( 'cron_schedules', 'aicommentcreator_cron_add_minute' );

// create a scheduled event (if it does not exist already)

function aicommentcreator_cronstarter_activation() {
	if( !wp_next_scheduled( 'autocomment' ) ) {  
	   wp_schedule_event( time(), 'autocomment_time', 'autocomment' );  
	}
}
// and make sure it's called whenever WordPress loads
add_action('wp', 'aicommentcreator_cronstarter_activation');

//CRONJOB END



function aicommentcreator_general_setOptions(){
    if($_POST){
       
        $received_data = array(
          "aicommentcreator_settings_apikey" => $_POST["aicommentcreator_settings_apikey"],
        );
        $save = serialize($received_data);
    
        update_option('aicommentcreator_settings',$save,"yes");
    
        //Show success message if successfully saves, if not show error message
        if(get_option('aicommentcreator_settings') == $save){
          _e('<div class="alert alert-success" role="alert">Settings saved successfully!</div>', 'ai-comment-creator');
        }else{
          _e('<div class="alert alert-danger" role="alert">Error saving settings!</div>', 'ai-comment-creator');
        }

      }
}

function get_user_from_aicontentgenerator_api(){

  //Get Credit from AIContentGenerator.APP API
  $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://aicontentgenerator.app/api/getUserByDomain?user_domainname=' . get_site_url(),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

$json = json_decode($response, true);

return $json[0];

}

function aicommentcreator_generalSettings(){ aicommentcreator_general_setOptions();?>



<form method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><?php _e('General Settings', 'ai-comment-creator'); ?></legend>


<div class="form-group">
<div class="card text-center">
    <div class="card-body">
      <h5 class="card-title"><?php _e('AI Content Generator', 'ai-comment-creator'); ?></h5>
      <p class="card-text"> <?php _e('Credit:','ai-comment-creator'); echo get_user_from_aicontentgenerator_api()["user_token"]; ?></p>
      <p class="card-text"> <?php _e('OpenAI Support :', 'ai-comment-creator');
      echo get_user_from_aicontentgenerator_api()["isPremium"] ? " Yes" : " No"; ?></p>
      <a href="<?php echo admin_url('admin.php?page=aicommentcreator_buyCredit') ?>" class="btn btn-primary"><?php _e('Buy Credit', 'ai-comment-creator'); ?></a>
    </div>
  </div>




</div>


  <!-- Text input-->
  <label class="col-md-4 control-label" for="aicommentcreator_settings_apikey"><?php _e('API Key', 'ai-comment-creator'); ?></label>  
  <div class="col-md-4">
 
  <input id="aicommentcreator_settings_apikey" name="aicommentcreator_settings_apikey" placeholder="sk-" value="<?php echo unserialize(get_option("aicommentcreator_settings"))["aicommentcreator_settings_apikey"]; ?>" placeholder="<?php if (unserialize(get_option("aicommentcreator_settings"))["aicommentcreator_settings_apikey"]) {
        echo "";
    } else {
       echo "API Key";
     } ?>" type="text" class="form-control input-md" <?php echo get_user_from_aicontentgenerator_api()["isPremium"] ? "" : "readonly"; ?>>
  <span class="help-block"><?php _e('OpenAI API Key', 'ai-comment-creator'); ?></span>  
  </div>
</div>




<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary"><?php _e('Save', 'ai-comment-creator'); ?></button>
  </div>
</div>

</fieldset>
</form>

 <?php
    
}


function aicommentcreator_automaticComment(){ aicommentcreator_automaticComment_setOptions(); ?>


<form method="post" class="form-horizontal">
<fieldset>
<!-- AUTOMATİC COMMENT -->

<!-- Form Name -->
<legend><?php _e('Automatic Comment', 'ai-comment-creator'); ?></legend>



<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_categories[]"><?php _e('Select Categories', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">
    <select name="select_categories[]" class="form-control" multiple size = 3>
      <?php

        $selected_categories = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_categories"];
        $selected_time_type = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_time_type"];
        $selected_time = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_time"];
        $selected_comment_language = unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_comment_language"];


        $categories = get_categories( array(
          'orderby' => 'name',
          'order'   => 'ASC'
      ) );

      foreach( $categories as $category ) {
          
          if(isset($selected_categories) && in_array($category->term_id, $selected_categories)){
            echo $category->term_id." is here";
            
              $option = '<option value="' . $category->term_id . '" selected>';
              $option .= $category->name;
              $option .= '</option>';
              echo $option;
              continue; 
          } 
          $option = '<option value="' . $category->term_id . '">';
          $option .= $category->name;
          $option .= '</option>';
          echo $option;
      }
     

      ?>
      
    </select>
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_time_type"><?php _e('Time Type', 'ai-comment-creator');  ?></label>
  <div class="col-md-4">
    <select id="select_time_type" name="select_time_type" class="form-control">
      
      <option <?php if ($selected_time_type == 1) {
        echo ' selected';
      } ?> value="1"><?php _e('Hour', 'ai-comment-creator'); ?></option>
      <option <?php if ($selected_time_type == 2) {
        echo ' selected';
      } ?> value="2"><?php _e('Day', 'ai-comment-creator'); ?></option>
      <option <?php if ($selected_time_type == 3) {
        echo ' selected';
      } ?> value="3"><?php _e('Week', 'ai-comment-creator'); ?></option>
      <option <?php if ($selected_time_type == 4) {
        echo ' selected';
      } ?> value="4"><?php _e('Month', 'ai-comment-creator'); ?></option>
      <option <?php if ($selected_time_type == 5) {
        echo ' selected';
      } ?> value="5"><?php _e('Minute', 'ai-comment-creator'); ?></option>
      
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="time_value"><?php _e('Time', 'ai-comment-creator'); ?></label>  
  <div class="col-md-4">
  <input id="time_value" name="time_value" type="number" placeholder="12" value="<?php echo $selected_time ?>" class="form-control input-md" required>
  <span class="help-block"><?php _e('Create comment for each hour/day/week or month. e.g 12 Hours.', 'ai-comment-creator'); ?></span>  
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_language"><?php _e('Language', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">
    <select id="select_language" name="select_language" class="form-control">
    
      <option <?php if ($selected_comment_language == 'RANDOM') {echo ' selected';} ?> value="RANDOM">Random</option>
      <option <?php if ($selected_comment_language == 'AU') {echo ' selected';} ?> value="AU">Australia</option>
      <option <?php if ($selected_comment_language == 'BR') {echo ' selected';} ?> value="BR">Brazil</option>
      <option <?php if ($selected_comment_language == 'CA') {echo ' selected';} ?> value="CA">Canada</option>
      <option <?php if ($selected_comment_language == 'CH') {echo ' selected';} ?> value="CH">Switzerland</option>
      <option <?php if ($selected_comment_language == 'DE') {echo ' selected';} ?> value="DE">Germany</option>
      <option <?php if ($selected_comment_language == 'DK') {echo ' selected';} ?> value="DK">Denmark</option>
      <option <?php if ($selected_comment_language == 'ES') {echo ' selected';} ?> value="ES">Spain</option>
      <option <?php if ($selected_comment_language == 'FI') {echo ' selected';} ?> value="FI">Finland</option>
      <option <?php if ($selected_comment_language == 'FR') {echo ' selected';} ?> value="FR">France</option>
      <option <?php if ($selected_comment_language == 'GB') {echo ' selected';} ?> value="GB">United Kingdom</option>
      <option <?php if ($selected_comment_language == 'IE') {echo ' selected';} ?> value="IE">Ireland</option>
      <option <?php if ($selected_comment_language == 'IN') {echo ' selected';} ?> value="IN">India</option>
      <option <?php if ($selected_comment_language == 'IR') {echo ' selected';} ?> value="IR">Iran</option>
      <option <?php if ($selected_comment_language == 'MX') {echo ' selected';} ?> value="MX">Mexico</option>
      <option <?php if ($selected_comment_language == 'NL') {echo ' selected';} ?> value="NL">Netherlands</option>
      <option <?php if ($selected_comment_language == 'NO') {echo ' selected';} ?> value="NO">Norway</option>
      <option <?php if ($selected_comment_language == 'NZ') {echo ' selected';} ?> value="NZ">New Zealand</option>
      <option <?php if ($selected_comment_language == 'RS') {echo ' selected';} ?> value="RS">Serbia</option>
      <option <?php if ($selected_comment_language == 'TR') {echo ' selected';} ?> value="TR">Turkey</option>
      <option <?php if ($selected_comment_language == 'UA') {echo ' selected';} ?> value="UA">Ukraine</option>
      <option <?php if ($selected_comment_language == 'US') {echo ' selected';} ?> value="US">United States</option>

    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="max_token"><?php _e('Max Token', 'ai-comment-creator'); ?></label>  
  <div class="col-md-4">
  <input value="<?php echo unserialize(get_option("aicommentcreator_autocomment_settings"))["aicommentcreator_max_token"]  ?>" id="max_token" name="max_token" type="number" placeholder="200" class="form-control input-md" required>
  <span class="help-block"><?php _e('You can think of tokens as pieces of words, where 1,000 tokens is about 750 words.', 'ai-comment-creator'); ?></span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment_prompt">Prompt</label>
  <div class="col-md-4">
    <select id="comment_prompt" name="comment_prompt" class="form-control">
      <option value="Share your personal experience or story related to the topic of the blog post"><?php _e('Share your personal experience or story related to the topic of the blog post', 'ai-comment-creator'); ?></option>
      <option value="Ask a thought-provoking question about the topic to spark discussion"><?php _e('Ask a thought-provoking question about the topic to spark discussion', 'ai-comment-creator'); ?></option>
      <option value="Provide an alternative perspective or counterargument to the author's point of view"><?php _e('Provide an alternative perspective or counterargument to the authors point of view','ai-comment-creator'); ?></option>
      <option value="Share a relevant resource or additional information that readers may find useful"><?php _e('Share a relevant resource or additional information that readers may find useful', 'ai-comment-creator'); ?></option>
      <option value="Offer a unique solution or insight to a problem discussed in the post"><?php _e('Offer a unique solution or insight to a problem discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share a personal opinion or insight on a particular aspect of the post"><?php _e('Share a personal opinion or insight on a particular aspect of the post', 'ai-comment-creator'); ?></option>
      <option value="Offer a specific compliment or constructive criticism on the post"><?php _e('Offer a specific compliment or constructive criticism on the post', 'ai-comment-creator'); ?></option>
      <option value="Provide an analogy or metaphor to help explain a complex idea discussed in the post"><?php _e('Provide an analogy or metaphor to help explain a complex idea discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share an interesting fact or statistic that relates to the post"><?php _e('Share an interesting fact or statistic that relates to the post', 'ai-comment-creator'); ?></option>
      <option value="Ask for the author's thoughts or opinions on a related topic or issue."><?php _e('Ask for the authors thoughts or opinions on a related topic or issue.', 'ai-comment-creator'); ?></option>
      <option value="Share your own example or case-study that relates to the post"><?php _e('Share your own example or case-study that relates to the post', 'ai-comment-creator'); ?></option>
      <option value="Summarize the post and provide your own insights"><?php _e('Summarize the post and provide your own insights', 'ai-comment-creator'); ?></option>
      <option value="Ask the author to expand on a specific point or idea discussed in the post"><?php _e('Ask the author to expand on a specific point or idea discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Provide a real-world application of the information discussed in the post"><?php _e('Provide a real-world application of the information discussed in the post', 'ai-comment-creator'); ?></option>
      <option value=">Share a quote or passage that resonates with the post and explain why"><?php _e('Share a quote or passage that resonates with the post and explain why', 'ai-comment-creator'); ?></option>
      <option value="Highlight any errors or inaccuracies in the post and provide credible sources to support your claim"><?php _e('Highlight any errors or inaccuracies in the post and provide credible sources to support your claim', 'ai-comment-creator'); ?></option>
      <option value="Provide additional tips or strategies related to the topic discussed in the post"><?php _e('Provide additional tips or strategies related to the topic discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share a personal recommendation for a product or service related to the post"><?php _e('Share a personal recommendation for a product or service related to the post', 'ai-comment-creator'); ?></option>
      <option value="Offer to share the post on your own social media or website to help promote it"><?php _e('Offer to share the post on your own social media or website to help promote it', 'ai-comment-creator'); ?></option>
      <option value="Share your own personal goals or plans related to the topic discussed in the post."><?php _e('Share your own personal goals or plans related to the topic discussed in the post.', 'ai-comment-creator'); ?></option>
    </select>
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="automatic_status"><?php _e('Status', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">
  <div class="radio">
    <label for="automatic_status-0">
      <input type="radio" name="automatic_status" id="automatic_status-0" value="1" <?php $settings = unserialize(get_option('aicommentcreator_autocomment_settings')); if($settings['automatic_status'] == '1'){ echo 'checked="checked"'; } ?>>
      <?php _e('Active', 'ai-comment-creator'); ?>
    </label>
	</div>
  <div class="radio">
    <label for="automatic_status-1">
      <input type="radio" name="automatic_status" id="automatic_status-1" value="2" <?php $settings = unserialize(get_option('aicommentcreator_autocomment_settings')); if($settings['automatic_status'] != '1'){ echo 'checked="checked"'; } ?>>
      <?php _e('Pasive', 'ai-comment-creator'); ?>
    </label>
	</div>
  </div>
</div>


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_avatar">Avatar</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="select_avatar-0">
      <input type="radio" name="select_avatar" id="select_avatar-0" value="1" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="select_avatar-1">
      <input type="radio" name="select_avatar" id="select_avatar-1" value="2">
      No
    </label>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit_automatic_comment"></label>
  <div class="col-md-4">
    <button id="submit_automatic_comment" name="submit_automatic_comment" class="btn btn-primary"><?php _e('Submit', 'ai-comment-creator'); ?></button>
  </div>
</div>

</fieldset>
</form>

<?php
}


function aicommentcreator_buyCredit()  { ?>

<form method="post" class="form-horizontal" >
<fieldset>

<!-- Form Name -->
<legend><?php _e('Buy Credit', 'ai-comment-creator'); ?></legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_token"><?php _e('Select Token', 'ai-comment-creator'); ?></label>
  <div class="col-md-5">
    <select id="select_token" name="select_token" class="form-control">
      <?php

      echo '<option value="OpenAI Support/1299" name="1111">OpenAI Support - 12.99$</option> ';

      // Get Prices
  
      $url = 'https://aicontentgenerator.app/api/prices';
      $json = file_get_contents($url);
      $full_data = json_decode($json,true);
      $data = $full_data["data"];
      


     
      foreach($data as $value) {
        $price_decimal = $value["unit_amount_decimal"] / 100;
        echo '<option value="'.$value["nickname"].'/'.$value["unit_amount_decimal"].'" name="'.$value["id"].'">'.$value["nickname"].' - '.$price_decimal.'$</option>';
      }

     

      
      ?>
      
      
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buy"></label>
  <div class="col-md-4">
    <button type="buy-button" id="but-button" name="buy-button" class="btn btn-primary"><?php _e('Buy Token', 'ai-comment-creator'); ?></button>
    
    
    <?php

    if(isset($_POST["buy-button"])){


  
    $productId = $_POST['select_token'];
    $parts = explode("/", $productId);
    $productName = $parts[0];
    $productPrice = $parts[1];
   
    $data = array('productName' => $productName, 'productPrice' => $productPrice);

      
    $result = file_get_contents("https://www.aicontentgenerator.app/api/checkoutNewProduct?productName=" . $productName . "&productPrice=" . $productPrice . "&userDomain=" . get_site_url());
    $decoded_json = json_decode($result,true);

    $url = $decoded_json["url"];
    
    echo '<script>window.location.href = "'.$url.'";</script>';
    

    }

    ?>
    
    

  </div>
</div>

</fieldset>
</form>



<?php
}


function aicommentcreator_addComment(){  aicommentcreator_addComment_setOptions(); ?>

<div id="loading">
  <div class="loader">
    <div class="inner one"></div>
    <div class="inner two"></div>
    <div class="inner three"></div>
  </div>
</div>
<form method="post" class="form-horizontal">
<fieldset>


<!-- MANUAL COMMENT --> 

<!-- Form Name -->
<legend><?php _e('Manual Comment', 'ai-comment-creator'); ?></legend>

<!-- Hidden İnput for API Key-->
<input type="hidden" id="ai_api_key" value="<?php echo unserialize(get_option("aicommentcreator_settings"))["aicommentcreator_settings_apikey"];  ?>" class="form-control input-md">

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_posts"><?php _e('Select Posts', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">
    <select id="select_posts" name="select_posts" class="form-control">

      <?php

      


      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
      );

      $all_posts = get_posts( $args );

      for($i=0;$i<count($all_posts);$i++){
        echo '<option id="'.$all_posts[$i]->ID .'" value="'.$all_posts[$i]->ID.'" name="'.$all_posts[$i]->post_content.'">'.$all_posts[$i]->post_title.' (ID:'.$all_posts[$i]->ID.')</option>';
      }

      // Get AIContentGenerator Credit
      $user_current_credit = (int) get_user_from_aicontentgenerator_api()["user_token"];

      //Create hidden input for user credit
      echo '<input type="hidden" id="user_current_credit" value="'.$user_current_credit.'" class="form-control input-md">';

      //Create hidden input for domainname
      echo '<input type="hidden" id="domain_name" value="'.get_site_url().'" class="form-control input-md">';
    
      ?>
      
    </select>
  </div>
</div>

<!-- Select Basic Languages  -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_nation"><?php _e('Country', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">
    <select id="select_nation" name="select_nation" class="form-control">
      <option value="AU">Australia</option>
      <option value="BR">Brazil</option>
      <option value="CA">Canada</option>
      <option value="CH">Switzerland</option>
      <option value="DE">Germany</option>
      <option value="DK">Denmark</option>
      <option value="ES">Spain</option>
      <option value="FI">Finland</option>
      <option value="FR">France</option>
      <option value="GB">United Kingdom</option>
      <option value="IE">Ireland</option>
      <option value="IN">India</option>
      <option value="IR">Iran</option>
      <option value="MX">Mexico</option>
      <option value="NL">Netherlands</option>
      <option value="NO">Norway</option>
      <option value="NZ">New Zealand</option>
      <option value="RS">Serbia</option>
      <option value="TR">Turkey</option>
      <option value="UA">Ukraine</option>
      <option value="US">United States</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="max_token"><?php _e('Max Token', 'ai-comment-creator'); ?></label>  
  <div class="col-md-4">
  <input value="1000" id="max_token" name="max_token" type="number" placeholder="200" class="form-control input-md" required>
  <span class="help-block"><?php _e('You can think of tokens as pieces of words, where 1,000 tokens is about 750 words.', 'ai-comment-creator'); ?></span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment_prompt">Prompt</label>
  <div class="col-md-4">
    <select id="comment_prompt" name="comment_prompt" class="form-control">
      <option value="Share your personal experience or story related to the topic of the blog post"><?php _e('Share your personal experience or story related to the topic of the blog post', 'ai-comment-creator'); ?></option>
      <option value="Ask a thought-provoking question about the topic to spark discussion"><?php _e('Ask a thought-provoking question about the topic to spark discussion', 'ai-comment-creator'); ?></option>
      <option value="Provide an alternative perspective or counterargument to the author's point of view"><?php _e('Provide an alternative perspective or counterargument to the authors point of view','ai-comment-creator'); ?></option>
      <option value="Share a relevant resource or additional information that readers may find useful"><?php _e('Share a relevant resource or additional information that readers may find useful', 'ai-comment-creator'); ?></option>
      <option value="Offer a unique solution or insight to a problem discussed in the post"><?php _e('Offer a unique solution or insight to a problem discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share a personal opinion or insight on a particular aspect of the post"><?php _e('Share a personal opinion or insight on a particular aspect of the post', 'ai-comment-creator'); ?></option>
      <option value="Offer a specific compliment or constructive criticism on the post"><?php _e('Offer a specific compliment or constructive criticism on the post', 'ai-comment-creator'); ?></option>
      <option value="Provide an analogy or metaphor to help explain a complex idea discussed in the post"><?php _e('Provide an analogy or metaphor to help explain a complex idea discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share an interesting fact or statistic that relates to the post"><?php _e('Share an interesting fact or statistic that relates to the post', 'ai-comment-creator'); ?></option>
      <option value="Ask for the author's thoughts or opinions on a related topic or issue."><?php _e('Ask for the authors thoughts or opinions on a related topic or issue.', 'ai-comment-creator'); ?></option>
      <option value="Share your own example or case-study that relates to the post"><?php _e('Share your own example or case-study that relates to the post', 'ai-comment-creator'); ?></option>
      <option value="Summarize the post and provide your own insights"><?php _e('Summarize the post and provide your own insights', 'ai-comment-creator'); ?></option>
      <option value="Ask the author to expand on a specific point or idea discussed in the post"><?php _e('Ask the author to expand on a specific point or idea discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Provide a real-world application of the information discussed in the post"><?php _e('Provide a real-world application of the information discussed in the post', 'ai-comment-creator'); ?></option>
      <option value=">Share a quote or passage that resonates with the post and explain why"><?php _e('Share a quote or passage that resonates with the post and explain why', 'ai-comment-creator'); ?></option>
      <option value="Highlight any errors or inaccuracies in the post and provide credible sources to support your claim"><?php _e('Highlight any errors or inaccuracies in the post and provide credible sources to support your claim', 'ai-comment-creator'); ?></option>
      <option value="Provide additional tips or strategies related to the topic discussed in the post"><?php _e('Provide additional tips or strategies related to the topic discussed in the post', 'ai-comment-creator'); ?></option>
      <option value="Share a personal recommendation for a product or service related to the post"><?php _e('Share a personal recommendation for a product or service related to the post', 'ai-comment-creator'); ?></option>
      <option value="Offer to share the post on your own social media or website to help promote it"><?php _e('Offer to share the post on your own social media or website to help promote it', 'ai-comment-creator'); ?></option>
      <option value="Share your own personal goals or plans related to the topic discussed in the post."><?php _e('Share your own personal goals or plans related to the topic discussed in the post.', 'ai-comment-creator'); ?></option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment_fullname"><?php _e('Fullname', 'ai-comment-creator'); ?></label>  
  <div class="col-md-4">
  <input id="comment_fullname" name="comment_fullname" type="text" placeholder="Adam Smith" class="form-control input-md">
  <span class="help-block"><?php _e('Fullname of the commenter. You can fill manually or generate content with AI.', 'ai-comment-creator'); ?></span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment_email">Email</label>  
  <div class="col-md-4">
  <input id="comment_email" name="comment_email" type="text" placeholder="info@example.com" class="form-control input-md">
  <span class="help-block"><?php _e('Email of commenter. You can fill manually or generate content with AI.', 'ai-comment-creator'); ?></span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comment_content"><?php _e('Content', 'ai-comment-creator'); ?></label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comment_content" name="comment_content"></textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="avatar_url">Avatar URL</label>  
  <div class="col-md-4">
  <input id="avatar_url" name="avatar_url" type="text" placeholder="" class="form-control input-md">
  <span class="help-block">If you dont want to avatar, you can leave it blank.</span>  
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="makecomment_button"></label>
  <div class="col-md-8">
  <button type="button" id="generatecontent_button" name="generatecontent_button" class="btn btn-success" ><?php _e('Generate Content', 'ai-comment-creator'); ?></button>
    
    <button id="submitcomment_button" name="submitcomment_button" class="btn btn-primary"><?php _e('Submit', 'ai-comment-creator'); ?></button>
  </div>
</div>

</fieldset>
</form>

 <?php

}



 function aicommentcreator_setAdminMenu(){
    add_menu_page(__("AI Comment Creator","ai-comment-creator"),__("AI Comment Creator","ai-comment-creator"),'manage_options','aicommentcreator_menu','aicommentcreator_generalSettings',plugins_url( 'ai-comment-creator/images/icon-ai-25.png' ));
    add_submenu_page( 'aicommentcreator_menu', __("Automatic Comment","ai-comment-creator"), __("Automatic Comment","ai-comment-creator"), '1' ,'aicommentcreator_automaticComment' ,'aicommentcreator_automaticComment', '1');
    add_submenu_page( 'aicommentcreator_menu', __("Manual Comment","ai-comment-creator"), __("Manual Comment","ai-comment-creator"), '2' ,'aicommentcreator_addComment' ,'aicommentcreator_addComment', '2');
    //Buy Credit
    add_submenu_page( 'aicommentcreator_menu', __("Buy Credit","ai-comment-creator"), __("Buy Credit","ai-comment-creator"), '3' ,'aicommentcreator_buyCredit' ,'aicommentcreator_buyCredit', '3');
}

add_action('admin_menu','aicommentcreator_setAdminMenu');




?>