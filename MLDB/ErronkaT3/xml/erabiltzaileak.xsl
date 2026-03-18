<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" />
    <xsl:param name="generoa" />
    <xsl:template match="/">
        <h1 class="orri-izenburua">Erabiltzaileak</h1>

        <section class="sailkapena">
            <table class="taula-sailkapena">
                <thead>
                    <tr>
                        <th>Erabiltzailea</th>
                        <th>Pashaitza</th>
                    </tr>
                </thead>
                <tbody>
                    <xsl:for-each select="//erabiltzaileak/pertsona">
                        <tr>

                            <xsl:variable name="idTaldea" select="@taldea_id" />

                            <td>
                                <xsl:value-of select="erabiltzailea" />
                            </td>

                            <td>
                                <xsl:value-of select="pasahitza" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </tbody>
            </table>
        </section>
    </xsl:template>

</xsl:stylesheet>