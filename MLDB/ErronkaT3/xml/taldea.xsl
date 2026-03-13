<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="html" indent="yes" />

    <xsl:param name="taldea_id" />

    <xsl:template match="/">

        <xsl:for-each select="//taldeak/taldea[@id=$taldea_id]">

            <h1>
                <xsl:value-of select="izena" />
            </h1>

            <img>
                <xsl:attribute name="src">
                    <xsl:value-of select="irudia" />
                </xsl:attribute>
            </img>

            <p>
                <b>Helbidea:</b>
                <xsl:value-of select="helbidea" />
            </p>

            <p>
                <b>Web:</b>
                <a>
                    <xsl:attribute name="href">
                        <xsl:value-of select="web" />
                    </xsl:attribute>
                    <xsl:value-of select="web" />
                </a>
            </p>

            <audio controls="controls">
                <xsl:attribute name="src">
                    <xsl:value-of select="audioa" />
                </xsl:attribute>
            </audio>


            <h2>Jokalariak</h2>

            <table border="1">

                <tr>
                    <th>NAN</th>
                    <th>Izena</th>
                    <th>Abizena</th>
                    <th>Jaiotza</th>
                    <th>Soldata</th>
                    <th>Posizioa</th>
                </tr>

                <xsl:for-each select="jokalariak/jokalaria">

                    <tr>

                        <td>
                            <xsl:value-of select="@nan" />
                        </td>

                        <td>
                            <xsl:value-of select="izena" />
                        </td>

                        <td>
                            <xsl:value-of select="abizena" />
                        </td>

                        <td>
                            <xsl:value-of select="jaiotza" />
                        </td>

                        <td>
                            <xsl:value-of select="soldata" />
                        </td>

                        <td>
                            <xsl:value-of select="posizioa" />
                        </td>

                    </tr>

                </xsl:for-each>

            </table>

        </xsl:for-each>

    </xsl:template>

</xsl:stylesheet>