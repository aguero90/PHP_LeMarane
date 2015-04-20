<PRE>

    {* bold and title are read from the config file *}
    {if #bold#}<b>{/if}
        {* capitalize the first letters of each word of the title *}
Titolo: {#title#|capitalize}
        {if #bold#}</b>{/if}

L'ora corrente &egrave;: {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}

Il valore della variabile globale $SCRIPT_NAME &egrave;: {$SCRIPT_NAME}

Un esempio su come accedere alla variabile SERVER_NAME del server: {$smarty.server.SERVER_NAME}

Il valore di {ldelim}$name{rdelim} &egrave;: <b>{$name}</b>

Ecco un esempio di modificatori di variabili {ldelim}$name|upper{rdelim}: <b>{$name|upper}</b>

Un esempio di un section loop:

    {section name=outer loop=$FirstName}
        {if $smarty.section.outer.index is odd by 2}
            {$smarty.section.outer.rownum} . {$FirstName[outer]} {$LastName[outer]}
        {else}
            {$smarty.section.outer.rownum} * {$FirstName[outer]} {$LastName[outer]}
        {/if}
    {sectionelse}
	none
    {/section}

Un esempio di un section loop su valori delle chiavi

    {section name=sec1 loop=$contacts}
	phone: {$contacts[sec1].phone}<br>
	fax: {$contacts[sec1].fax}<br>
	cell: {$contacts[sec1].cell}<br>
    {/section}

test dei tag strip
    {strip}
<table border=0>
    <tr>
        <td>
            <A HREF="{$SCRIPT_NAME}">
            <font color="red">This is a  test     </font>
            </A>
        </td>
    </tr>
</table>
    {/strip}

</PRE>

Questo &egrave; un esempio della funzione html_select_date:

<form>
    {html_select_date start_year=1998 end_year=2010}
</form>

Questo &egrave; un esempio della funzione html_select_time:

<form>
    {html_select_time use_24_hours=false}
</form>

Questo &egrave; un esempio della funzione html_select_html:

<form>
<select name=states>
        {html_options values=$option_values selected=$option_selected output=$option_output}
</select>
</form>
