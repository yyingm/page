package com.sl.pmp.entity;

import java.io.Serializable;
import java.util.Date;

public class Test01 implements Serializable {
	private static final long serialVersionUID = 1L;
	private Integer recordid;
	private String  iname;
	private Date itime;
	private String remark;
	public Integer getRecordid() {
		return recordid;
	}
	public void setRecordid(Integer recordid) {
		this.recordid = recordid;
	}
	public String getIname() {
		return iname;
	}
	public void setIname(String iname) {
		this.iname = iname;
	}
	public Date getItime() {
		return itime;
	}
	public void setItime(Date itime) {
		this.itime = itime;
	}
	public String getRemark() {
		return remark;
	}
	public void setRemark(String remark) {
		this.remark = remark;
	}
	
	
	
}
